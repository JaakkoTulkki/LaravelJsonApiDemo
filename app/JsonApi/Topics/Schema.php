<?php

namespace App\JsonApi\Topics;

use App\Post;
use App\Topic;
use CloudCreativity\JsonApi\Exceptions\SchemaException;
use CloudCreativity\LaravelJsonApi\Schema\EloquentSchema;
use Illuminate\Database\Eloquent\Collection;

class Schema extends EloquentSchema
{

    const RESOURCE_TYPE = 'topics';

    /**
     * @var string
     */
    protected $resourceType = self::RESOURCE_TYPE;

    /**
     * @var array
     */
    protected $attributes = [
        'topic_name',
    ];

    /**
     * @param object $resource
     * @param bool $isPrimary
     * @param array $includeRelationships
     * @return array
     */
    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        if (!$resource instanceof Topic) {
            throw new SchemaException('Expecting a topic model.');
        }


        $posts = $resource->posts;

        $comments = new Collection();
        foreach($posts as $post) {
            $comments = $comments->merge($post->comments);
        }

        return [
            'posts' => [
                self::SHOW_DATA => true,
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
                self::DATA => $posts,
            ],



        ];
    }

    public function getIncludePaths()
    {
        return ['posts', 'posts.comments'];
    }

}
