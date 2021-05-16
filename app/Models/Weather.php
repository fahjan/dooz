<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UserTrait;

class Weather extends Model
{
    use HasFactory;
    use SoftDeletes;
    use UserTrait;
    protected $table='weathers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'degree',
        'story',
        'image',
    ];

    

}
