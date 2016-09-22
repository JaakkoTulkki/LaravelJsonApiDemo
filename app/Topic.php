<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{

    /**
     * Mass-assignable attributes.
     *
     * @var array##
     */
    protected $fillable = [
        'topic_name',
    ];

    /**
     * @return HasMany
     */
//    public function posts()
//    {
//        return $this->hasMany(Post::class, 'topic_id');
//    }

}
