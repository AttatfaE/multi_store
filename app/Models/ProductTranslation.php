<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product_translations';
    protected $fillable = [
        'name','description','short_description'
    ];

    public $timestamps = false;
}
