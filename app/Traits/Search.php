<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait Search
{

    public function scopeSearch($query)
    {
        \View::share('s', request()->s);
        $query->where(function ($query) {
            foreach ($this->fillable as $colum) {
                $query->orWhere($colum, 'LIKE', '%' . request()->s . '%');
            }
            return $query;
        });
        return $query;
    }
}
