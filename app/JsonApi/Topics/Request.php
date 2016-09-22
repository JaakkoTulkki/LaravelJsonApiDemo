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
//    protected $hasMany = [
//        'posts'
//    ];

    /**
     * @var array
     */
    protected $allowedSortParameters = [
//        'created_at',
//        'updated_at',
        'topic_name',
    ];

    /**
     * @var array
     */
    protected $allowedFilteringParameters = [
        'topic_name',
    ];

    /**
     * Request constructor.
     * @param Validators $validator
     */
//    public function __construct(Validators $validator)
//    {
//        parent::__construct($validator);
//    }

}
