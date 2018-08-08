<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_list = Category::all();
        return view('backend.category.add_category',compact('category_list'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          //'cat_title' => 'required|max:255|min:2',
          'cat_name' => 'required|max:255|min:2',
          //'cat_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required'
      ]);
      $file = $request->file('cat_image');
      if($file!=NULL) {
          $name        = time() . '_' . $file->getClientOriginalName();
          $upload_path = 'public/CategoryImage/';
          $file->move( $upload_path, $name );
          $cat_image = $upload_path . $name;

      }else{
          $cat_image = '';
      }

      $category = new Category();
      $category->cat_title = $request->cat_title;
      $category->cat_name = $request->cat_name;
      $category->cat_image = $cat_image;
      $category->cat_major = $request->cat_major;
      $category->save();
      return back()->with('message_success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->cat_name = $request->cat_name;

        $category->save();

        return back()->with('message_success','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();

        return back()->with('message_success','Category Deleted Successfully');
    }
}
