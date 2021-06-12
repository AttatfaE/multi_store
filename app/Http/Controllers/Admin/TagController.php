<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function getTags()
    {
        $tags = Tag::orderBy('id', 'DESC') ->paginate(PAGINATION_COUNT);
        return view('admin.tags.index', compact('tags'));
    }

    public function addTag()
    {
        return view('admin.tags.create');
    }

    public function store(TagRequest $request){
        $tag = Tag::create($request->except('_token'));

        $tag->name = $request->name;
        $tag->save();
        return redirect()->route('all.tags')->with('success', __('admin/tag.New tag is successfully added')  );


    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(TagRequest $request, $id){
        $tag = Tag::find($id);
        $tag->update($request->except('_token'));

        $tag->name = $request->name;
        $tag->save();
        return redirect()->route('all.tags')->with('success', __('admin/tag.Tag is successfully updated')  );


    }

    public function delete($id)
    {
       try {
            $tag = Tag::find($id);

            DB::beginTransaction();
            if (!isset($tag))
                return redirect()->route('all.tags')->with('error',__('admin/Tg.Tag not exist'));

            $tag->delete();
            DB::commit();
            return redirect()->route('all.tags')->with('success',__('admin/tag.Tag is successfully deleted'));

             }
           catch (\Exception $ex){
                 DB::rollBack();
                 return redirect()->route('all.tags')->with('error',__('admin/brand.There is an error somewhere, please try later'));

             }
    }

}
