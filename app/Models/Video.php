<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UserTrait;

class Video extends Model
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
        
    ];

    public function getImageAttribute() {
        if (strpos($this->sory, '=') !== false) {
            $id = explode('=', $this->story)[1];
        } else {
            $array = explode('//',$this->story );
            $array = preg_split("#/#", $this->story);

            $id = end($array);
        }

        return 'https://img.youtube.com/vi/'.$id.'/mqdefault.jpg';
        // return 'https://img.youtube.com/vi/'.$id.'/hqdefault.jpg';

        // return 'https://i.ytimg.com/vi/'.$id.'/hqdefault.jpg';
    }


}
