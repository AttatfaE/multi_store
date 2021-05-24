<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function editShipping($type)
    {
        if ($type == 'free'){
            return $setting = Setting::where('key','free_shipping_label')->first();
            view('admin.setting.editShipping');
        }
        else if ($type == 'quebec'){
            return  $setting = Setting::where('key','quebec_shipping_label')->first();
            view('admin.setting.editShipping');
        }
        else  if ($type == 'canada'){
            return  $setting = Setting::where('key','canada_shipping_label')->first();
            view('admin.setting.editShipping');
        }
        else  if ($type == 'international'){
            return  $setting = Setting::where('key','international_shipping_label')->first();
            view('admin.setting.editShipping');
        }
        else{
            return $setting = Setting::where('key','free_shipping_label')->first();
        }


    }
}
