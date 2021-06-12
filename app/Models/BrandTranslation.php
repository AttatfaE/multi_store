<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    protected $table = 'brandTranslations';
    protected $fillable = ['name'];
    public $timestamps = false;
}
