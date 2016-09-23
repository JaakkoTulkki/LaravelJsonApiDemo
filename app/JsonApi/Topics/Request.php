<?php

namespace App\JsonApi\Topics;

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
