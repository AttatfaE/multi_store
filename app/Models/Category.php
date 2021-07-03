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

    /*public function scopeActive($query){
        return $query->where('is_active',1);
    }*/

    public function active()
    {
        return $this->is_active == 1?__('admin/category.active'):__('admin/category.not active');
    }

    protected $casts = [
        'is_active'=>'boolean',
        'is_searchable'=>'boolean'
    ];

    public function categories()
    {
        return $this->hasMany(self::class,'parentId');
    }
}
