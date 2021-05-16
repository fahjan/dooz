<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UserTrait;

class Pge extends Model
{
    use SoftDeletes;
    use UserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'story',
        'status',
        'views',
        'main_image',
        'publish_date',
        'special',
    ];

}
