<?php

namespace App\Models;

use App\Traits\Search;
use App\Traits\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    use User;
    use Search;
    use SoftDeletes;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'editor_id',
        'title',
        'slug',
        'keywords',
        'leading',
        'story',
        'views',
        'photo_url',
        'is_special',
        'status',
        'video_url',
        'post_at',
        'slider',
        'marquee',
        'event',
        'started_at',
        'finished_at',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
