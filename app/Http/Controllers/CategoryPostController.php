<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryPostController extends Controller
{

    public function getSearch(Request $request)
    {

    }

    public function index()
    {
        $category = CategoryPost::all();
        return view('pages.category.index')->with(compact('category'));
    }


    public function create()
    {
        return view('pages.category.create');
    }


    public function store(Request $request)
    {
        $category = new CategoryPost();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Insert Successfully!!!');
    }


    public function show($categoryPost)
    {
        $category = CategoryPost::find($categoryPost);
        return view('pages.category.show')->with(compact('category'));
    }


    public function edit(CategoryPost $categoryPost)
    {
        //
    }


    public function update(Request $request, $categoryPost)
    {
        $data = request()->all();
        $category = CategoryPost::find($categoryPost);
        $category->title = $data['title'];
        $category->save();
        return redirect()->route('category.index')->with('success', 'Updated Successfully!!!');
    }


    public function destroy($categoryPost)
    {
        $category = CategoryPost::find($categoryPost);
        $category->delete();
        return redirect()->back();
    }


}
