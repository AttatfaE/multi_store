<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Models\BrandTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function getBrands()
    {
        $brands = Brand::orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
        return view('admin.brands.index', compact('brands'));
    }

    public function addBrand()
    {
        return view('admin.brands.create');
    }

    public function store(BrandRequest $request)
    {
        if (!$request->has('is_active'))
            $request->request->add(['is_active'=>'0']);

        $fileName = '';
        if ($request->has('photo')){
            $fileName = upload_image('brands',$request->photo);
        }

       $brand = Brand::create($request->except('_token','photo'));

       $brand->name = $request->name;
       $brand->photo = $fileName;
       $brand->save();

       return redirect()->route('all.brands')->with('success', __('admin/brand.New brand is successfully added')  );
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(BrandRequest $request, $id)
    {
        try {
            if (!$request->has('is_active'))
                $request->request->add(['is_active'=>0]);

            $brand = Brand::find($id);
            $fileName = $brand->photo;
            if ($request->has('photo')){
                if(file_exists(public_path('assets/images/'.$brand->photo))){
                    unlink(public_path('assets/images/'.$brand->photo));
                }
                $fileName = upload_image('brands',$request->photo);
            }
            DB::beginTransaction();
            $brand->name = $request->name;
            $brand->is_active = $request->is_active;
            $brand->photo = $fileName;
            $brand->save();
            DB::commit();
            return redirect()->route('all.brands')->with('success',__('admin/brand.Brand is successfully updated'));

        }
        catch (\Exception $ex){
            DB::rollBack();
            return redirect()->route('all.brands')->with('error',__('admin/brand.There is an error somewhere, please try later'));
        }


    }

    public function delete($id)
    {
        try {
            $brand =  Brand::find($id);
            if(file_exists(public_path('assets/images/'.$brand->photo))){
                unlink(public_path('assets/images/'.$brand->photo));
            }

            $brandsT = BrandTranslation::where('brand_id', $id)->get();
            DB::beginTransaction();
            if (!isset($brand))
                return redirect()->route('all.brands')->with('error',__('admin/brand.Brand not exist'));
            foreach ($brandsT as $brandT){
                $brandT->delete();
            }
            $brand->delete();
            DB::commit();
            return redirect()->route('all.brands')->with('success',__('admin/brand.Brand is successfully deleted'));

        }
        catch (\Exception $ex){
            DB::rollBack();
            return redirect()->route('all.brands')->with('error',__('admin/brand.There is an error somewhere, please try later'));

        }
        }
}
