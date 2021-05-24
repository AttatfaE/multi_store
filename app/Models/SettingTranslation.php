<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    protected $fillable =['key','is_translatable', 'plain_value'];

    public $timestamps = false;



}
