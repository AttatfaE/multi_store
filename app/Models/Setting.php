<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   use Translatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $with = array(
        'translations'
    );

    protected $translatedAttributes = ['value'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
   protected $table = "settings";
   protected $fillable =['key','is_translatable', 'plain_value'];

   protected $casts = [
       'is_translatable'=>'boolean'
   ];
    /**
     * Silently seed the given connection from the given path.
     *
     * @param  array  $settings
     * @return void
     */
   public static function setMany(array $settings)
   {
       foreach ($settings as $key => $value){
           self::set($key, $value);
       }

   }
    /**
     * Silently seed the given connection from the given path.
     *
     * @param  string  $key
     * @param  mixed $value
     * @return void
     */
   public static function set($key, $value)
   {
       if ($key === 'translatable'){
           static::setTranslatableSettings($value);
       }

       if (is_array($value)){
          $value = json_encode($value);
       }

       static::updateOrCreate([
          'key'=>$key,
           'plain_value'=>$value
       ]);


   }

    /**
     * Silently seed the given connection from the given path.
     *
     * @param  array $settings
     * @return void
     */
   public static function setTranslatableSettings(array $settings)
   {
       foreach ($settings as $key=>$value){
           static::updateOrCreate(
               ['key'=>$key],
               [
               'is_translatable'=>true,
               'value'=>$value
               ]);
       }
   }
}
