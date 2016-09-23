<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\JsonApi\Comments\Hydrator;
use App\JsonApi\Comments\Request;
use CloudCreativity\LaravelJsonApi\Http\Controllers\EloquentController;

final class CommentsController extends EloquentController
{


    public function __construct(
        Request $request,
        Hydrator $hydrator
    ) {
        parent::__construct(new Comment(), $request, $hydrator);
    }

}
