<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainCategoriesController extends Controller
{
    public function getCategories($type)
    {
        if ($type=='categories'){
            $categories = Category::whereNull('parentId')->orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
            return view('admin.categories.index', compact('type','categories'));

        }

       else if ($type=='subcategories'){
            $categories = Category::whereNotNull('parentId')->orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
            return view('admin.categories.index', compact('type','categories'));

        }
       else{
           $categories = Category::whereNull('parentId')->orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
           return view('admin.categories.index', compact('type','categories'));

       }


    }

    public function addCategories($type)
    {
            $categories = Category::whereNull('parentId')->orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
            return view('admin.categories.create',compact('categories','type'));
            /* else if ($type=='subcategory'){
            $categories = Category::whereNotNull('parentId')->orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
            return view('admin.categories.create',compact('categories','type'));
        }*/

    }

    public function store(CategoryRequest $request)
    {
//        try {
            if (!$request->has('is_active'))
                $request->request->add(['is_active'=>0]);
            DB::beginTransaction();
            $category = Category::create($request->except(csrf_token())) ;

            // Translations
            $category->name = $request->name;
            $category->save();

            DB::commit();
            if($request->has('parentId'))
                return redirect()->route('all.categories','subcategories')->with('success',__('admin/category.New Category is successfully created'));
            else
                return redirect()->route('all.categories','categories')->with('success',__('admin/category.New Category is successfully created'));

        /*  }
          catch (\Exception $exception){
              DB::rollBack();
              return redirect()->back()->with('error',__('admin/category.There is an error somewhere, please try later'));

          }*/


    }

    public function edit($id)
    {

      $category = Category::find($id);
      if ($category->parentId==null){

          return view('admin.categories.edit', compact('category'));
      }

      else
      {
          $categories = Category::whereNull('parentId')->get();
          return view('admin.categories.edit', compact('category','categories'));
      }

    }

    public function update($id, Request $request)
    {
//        try {
            if (!$request->has('is_active'))
                $request->request->add(['is_active'=> 0]);

            DB::beginTransaction();
            $category = Category::find($id);

            if (!$category)
                return redirect()->back()->with('error',__('admin/category.This category does not exist '));

            $category->update($request->except('_token'));

            //translations
            $category->name = $request->name;
            $category->save();
            DB::commit();
            if ($category->parentId==null)
            return redirect()->route('all.categories','categories')->with('success',__('admin/category.Category is successfully updated'));
            else
            return redirect()->route('all.categories','subcategories')->with('success',__('admin/category.Category is successfully updated'));


      /*  }
        catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with('error',__('admin/category.There is an error somewhere, please try later'));

        }*/


    }

    public function delete($id)
    {
        $category = Category::find($id);
        if (!$category)
            return redirect()->back()->with('error',__('admin/category.This category does not exist '));
        if ($category->parentId==null){
            $subCategories = Category::where('parentId',$id)->get();
                foreach ($subCategories as $subCategory){
                    $subCategory->delete();
                }

            $category->delete();
            return redirect()->route('all.categories','categories')->with('success',__('admin/category.Category is successfully deleted'));
        }
        else{
            $category->delete();
            return redirect()->route('all.categories','subcategories')->with('success',__('admin/subCategory.Subcategory is successfully deleted'));

        }





    }
}
