<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sub_cat = Subcategory::
                join('categories', 'categories.id', '=', 'subcategories.cat_id')
              ->select('subcategories.*','categories.cat_name')
              ->get();
        return view('backend.sub_category.add_sub_category',compact('sub_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'sub_cat_name' => 'required|max:255|min:2',
          'cat_id' => 'required',
          //'cat_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required'
      ]);
        $sub = new Subcategory();
        $sub->cat_id = $request->cat_id;
        $sub->sub_cat_name = $request->sub_cat_name;

        $sub->save();

        return back()->with('message_success','Sub Category Added Successfully');

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
      $sub = Subcategory::find($id);
      $sub->sub_cat_name = $request->sub_cat_name;

      $sub->save();

        return back()->with('message_success','Sub Category Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub = Subcategory::find($id);
        $sub->delete();

        return back()->with('message_success','Sub Category Deleted Successfully');

    }
}
