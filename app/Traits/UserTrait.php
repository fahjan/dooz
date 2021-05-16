<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait UserTrait
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->creator_id = Auth::id();
        });

        static::updating(function ($model) {
            $model->updator_id = Auth::id();
        });

        static::deleting(function ($model) {
            $model->deletor_id = Auth::id();
        });
    }

    public function creator()
    {
        return $this->BelongsTo(\App\User::class);
    }

    public function updator()
    {
        return $this->BelongsTo(\App\User::class);
    }

    public function deletor()
    {
        return $this->BelongsTo(\App\User::class);
    }
}
