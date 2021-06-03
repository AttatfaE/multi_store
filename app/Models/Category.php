<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use translatable;

    protected $with=['translations'];

    protected $translatedAttributes = ['name'];

    protected $fillable = ['parentId', 'slug', 'is_active'];

    //protected $hidden = ['translations'];

    protected $casts = [
        'is_active'=>'boolean',
        'is_searchable'=>'boolean'
    ];
}
