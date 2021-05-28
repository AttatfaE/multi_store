<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\ShippingRequest;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function editShipping($type)
    {
        if ($type == 'free'){
            $setting = Setting::where('key','free_shipping_label')->first();
            return view('admin.setting.editShipping2', compact('setting'));
        }
        else if ($type == 'quebec'){
              $setting = Setting::where('key','quebec_shipping_label')->first();
            return view('admin.setting.editShipping2', compact('setting'));
        }
        else  if ($type == 'canada'){
              $setting = Setting::where('key','canada_shipping_label')->first();
            return view('admin.setting.editShipping2', compact('setting'));
        }
        else  if ($type == 'international'){
              $setting = Setting::where('key','international_shipping_label')->first();
            return view('admin.setting.editShipping2', compact('setting'));
        }
        else{
            $setting = Setting::where('key','free_shipping_label')->first();
            return view('admin.setting.editShipping2', compact('setting'));        }


    }

    public function storeShipping(ShippingRequest $request, $id)
    {
        try {
            $shipping = Setting::find($id);
            DB::beginTransaction();
            $shipping->update([

                'plain_value'=>$request->plain_value
            ]);
            $shipping->value = $request->value;
            $shipping->save();
            DB::commit();
            return redirect()->back()->with('success','Shipping settings are successfully updated');

        }
        catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with('error','there is an error, please try later');
        }




    }
}
