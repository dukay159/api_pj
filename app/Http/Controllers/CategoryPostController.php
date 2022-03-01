<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearch(Request $request)
    {

    }

    public function index()
    {
        $category = CategoryPost::all();
        return view('layouts.index')->with(compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new CategoryPost();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Insert Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show($categoryPost)
    {
        $category = CategoryPost::find($categoryPost);
        return view('layouts.show')->with(compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryPost)
    {
        $data = request()->all();
        $category = CategoryPost::find($categoryPost);
        $category->title = $data['title'];
        $category->save();
        return redirect()->route('category.index')->with('success', 'Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryPost)
    {
        $category = CategoryPost::find($categoryPost);
        $category->delete();
        return redirect()->back();
    }

    // public function search (Request $request, $categoryPost)
    // {
    //     $output = ' ';
    //     $categories = CategoryPost::where('title','LIKE','%'.$request->keyword.'%')->get();
    //     foreach ($categories as $category) {
    //         $output .= '<tr>
    //                         <td>'.$category->title.'</td>
    //                     </tr>';
    //     }

    //     return response()->json($output);
    // }

    // public function search($categoryPost)
    // {
    //     return CategoryPost::where("title","like", "%".$categoryPost."%")->get();
    // }

}
