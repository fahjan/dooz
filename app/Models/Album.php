<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UserTrait;

class Album extends Model
{
    use HasFactory;
    use SoftDeletes;
    use UserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id',
        'title',
    ];

    /**
     * Get posts associated with the categoruy.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);

    }

}
