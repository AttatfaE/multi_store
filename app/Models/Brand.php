<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use translatable;

    protected $with=['translations'];

    protected $translatedAttributes = ['name'];

    protected $fillable = ['parentId', 'is_active', 'photo'];

    public function active()
    {
        return $this->is_active == 1?__('admin/category.active'):__('admin/category.not active');
    }

    protected $casts = [
        'is_active'=>'boolean',
        'is_searchable'=>'boolean'
    ];
}
