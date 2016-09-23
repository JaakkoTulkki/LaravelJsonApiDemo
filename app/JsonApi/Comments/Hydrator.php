<?php

namespace App\JsonApi\Comments;

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
        if (!$record instanceof Content) {
            throw new HydratorException('Expecting a Topic model.');
        }

        $data = $attributes->getMany([
            'content',
        ]);

        $record->fill($data);
    }


}
