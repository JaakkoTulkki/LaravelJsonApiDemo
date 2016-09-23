<?php

namespace App\JsonApi\Comments;

use App\Comment;
use CloudCreativity\JsonApi\Exceptions\SchemaException;
use CloudCreativity\LaravelJsonApi\Schema\EloquentSchema;

class Schema extends EloquentSchema
{

    const RESOURCE_TYPE = 'comments';

    /**
     * @var string
     */
    protected $resourceType = self::RESOURCE_TYPE;

    /**
     * @var array
     */
    protected $attributes = [
        'content'
    ];

//    /**
//     * @param object $resource
//     * @param bool $isPrimary
//     * @param array $includeRelationships
//     * @return array
//     */
//    public function getRelationships($resource, $isPrimary, array $includeRelationships)
//    {
//        if (!$resource instanceof Comment) {
//            throw new SchemaException('Expecting a comment model.');
//        }
//
//        return [
//            'post' => isset($includeRelationships['post']) ?
//                $resource->post : $this->createBelongsToIdentity($resource, 'post'),
//            'created-by' => isset($includeRelationships['created-by']) ?
//                $resource->person : $this->createBelongsToIdentity($resource, 'person'),
//        ];
//    }
}
