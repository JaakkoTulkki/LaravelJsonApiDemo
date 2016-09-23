<?php

namespace App\JsonApi\Topics;

use App\Person;
use App\Post;
use App\Topic;
use CloudCreativity\JsonApi\Contracts\Object\RelationshipInterface;
use CloudCreativity\JsonApi\Contracts\Object\StandardObjectInterface;
use CloudCreativity\JsonApi\Exceptions\HydratorException;
use CloudCreativity\LaravelJsonApi\Hydrator\AbstractHydrator;

class Hydrator extends AbstractHydrator
{

    /**
     * @param StandardObjectInterface $attributes
     * @param $record
     */
    protected function hydrateAttributes(StandardObjectInterface $attributes, $record)
    {
        if (!$record instanceof Topic) {
            throw new HydratorException('Expecting a Topic model.');
        }

        $data = $attributes->getMany([
            'topic_name',
        ]);

        $record->fill($data);
    }


    /**
     * @param RelationshipInterface $relationship
     * @param Topic $model
     */
    protected function hydratePostsRelationship(RelationshipInterface $relationship, Topic $model)
    {
        /** @var Topic|null */

        $postIds = Post::find($relationship->getIdentifiers()->getIds());
        $model->posts()->associate($postIds);
    }

}
