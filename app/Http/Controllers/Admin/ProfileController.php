<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\profileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $admin = Admin::find(auth('admin')->user()->id) ;
        return view('admin.profile.editProfile', compact('admin'));


    }

    public function updateProfile(profileRequest $request)
    {
        try {
        $admin = Admin::find(auth('admin')->user()->id);

            unset($request['id']);
            unset($request['password_confirmation']);

            if ($request->filled('password')){
                $request->merge(['password'=>bcrypt($request->password)]) ;
                $admin->update($request->all());
            }
            else{
                DB::beginTransaction();
                $admin->update($request->only('name','email'));
            }





            /*$admin-> update([
                'name'=>$request->name,
                'email'=>$request->email
            ]);*/
            DB::commit();
            return redirect()->back()->with('success',__('admin/profile.Admin profile is successfully updated'));

       }
        catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with('error',__('admin/profile.There is an error there, please try later'));
        }
    }

}
