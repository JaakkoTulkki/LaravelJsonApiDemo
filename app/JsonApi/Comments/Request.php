<?php

namespace App\JsonApi\Comments;

use CloudCreativity\LaravelJsonApi\Http\Requests\AbstractRequest;

class Request extends AbstractRequest
{

    /**
     * @var string
     */
    protected $resourceType = Schema::RESOURCE_TYPE;


    /**
     * @var array
     */
    protected $allowedFilteringParameters = [
        'id',
    ];


}
