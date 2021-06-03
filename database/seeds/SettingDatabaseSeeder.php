<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Setting::setMany([
            'default_locale'=>'en',
            'default_timezone'=>'UTC',
            'reviews_enabled'=>true,
            'auto_approve_reviews'=>true,
            'supported_currencies'=>['USD','CAD','EU'],
            'default_currency'=>'USD',
            'store_email'=>'attatfaelhadj@yahoo.ca',
            'search_engine'=>'mysql',
            'free_shipping_cost'=>0,
            'quebec_shipping_cost'=>0,
            'canada_shipping_cost'=>0,
            'international_shipping_cost'=>0,
            'translatable'=>[
                'store_name'=>'Attatfa store',
                'free_shipping_label'=>'free shipping',
                'quebec_shipping_label'=>'quebec shipping',
                'canada_shipping_label'=>'canada shipping',
                'international_shipping_label'=>'international shipping'
            ]
        ]);


    }
}
