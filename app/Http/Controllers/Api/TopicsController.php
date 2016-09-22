<?php

namespace App\Http\Controllers\Api;

use App\JsonApi\Topics\Hydrator;
use App\JsonApi\Topics\Request;
use App\Topic;
use CloudCreativity\LaravelJsonApi\Http\Controllers\EloquentController;

final class TopicsController extends EloquentController
{

    /**
     * PeopleController constructor.
     * @param Request $request
     * @param Hydrator $hydrator
     */
    public function __construct(
        Request $request,
        Hydrator $hydrator
    ) {
        parent::__construct(new Topic(), $request, $hydrator);
    }

}
