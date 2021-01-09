<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait User
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
            $model->updater_id = Auth::id();
        });

        static::deleting(function ($model) {
            $model->destroyer_id = Auth::id();
        });
    }

    public function creator()
    {
        return $this->BelongsTo(\App\User::class);
    }

    public function updater()
    {
        return $this->BelongsTo(\App\User::class);
    }

    public function destroyer()
    {
        return $this->BelongsTo(\App\User::class);
    }
}
