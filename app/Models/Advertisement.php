<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UserTrait;

class Advertisement extends Model
{
    use HasFactory;
    use SoftDeletes;
    use UserTrait;


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
    // 'started_at' => 'datetime:Y-m-d H:i:s',
    // 'finished_at' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
        'sort',
        'title',
        'url',
        'main_image',
        'location',
        // 'started_at',
        // 'finished_at',
    ];

    public function getImageAttribute() {
        return $this->main_image;
    }


}
