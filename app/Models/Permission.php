<?php

namespace App\Models;

use Laratrust\Models\LaratrustPermission;
use Illuminate\Support\Str;

class Permission extends LaratrustPermission
{
    public $incrementing = false;
    public $guarded = [];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->name = strtolower($model->name);
            $model->display_name = ucwords(strtolower($model->display_name));
            $model->description = ucwords(strtolower($model->description));
        });
        static::updating(function ($model) {
            $model->name = strtolower($model->name);
            $model->display_name = ucwords(strtolower($model->display_name));
            $model->description = ucwords(strtolower($model->description));
        });
    }
}
