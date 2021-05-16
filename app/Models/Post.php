<?php

namespace App\Models;

use App\Traits\Search;
use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class Post extends Model
{
    use HasFactory;

    use UserTrait;
    use Search;
    use SoftDeletes;
    // use Sluggable;

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
        'main_image',
        'is_special',
        'status',
        'video_url',
        'post_at',
        'slider',
        'marquee',
        'event',
        'start_date',
        'finish_date',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    /* public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    } */

    /**
     * Get categories associated with the post.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

    public function relatedposts()
    {
        return $this->belongsToMany(Post::class, 'post_post', 'post_id', 'relatedpost_id');
    }

    public function getImageAttribute() {
        // TODO: try this 
        // $url = str_replace('http://', 'https://', $this->main_image);
        // return $this->main_image;
        
        $url = explode('/wp-content/', $this->main_image);

        
            if(isset($url[1]) && strpos($this->main_image, 'https://scontent') === false){
                return $url[1];
            } else {
                return $this->main_image;
            }
    }


    public function getSlugAttribute()
    {
        return $this->slug($this->title);
    }

    public function getCreatedAttribute() {
        return $this->created_at->format('Y-m-d');
    }

    public function slug($string, $separator = '-') {
        if (is_null($string)) {
            return "";
        }
    
        $string = trim($string);
    
        $string = mb_strtolower($string, "UTF-8");;
    
        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);
    
        $string = preg_replace("/[\s-]+/", " ", $string);
    
        return preg_replace("/[\s_]/", $separator, $string);
    
    }
}
