<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();

        return view('backend.admin.categories.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validation=  $this->validate($request,[
            'category'=>'required',

        ]);
      if (!$validation){
          return redirect()->back()->withInput()->withErrors($validation);
      }
        try {
          $data=[
              'category_name'=>$request->category,
              'parent_id'=>$request->parent
          ];
    //dd($data);
           $save= Category::create($data);
          session()->flash('type','success');
          session()->flash('message','Category Added !');
          return redirect()->back();

        }catch (\Exception $error){
            session()->flash('type','danger');
            session()->flash('message','Oh no!Something went to wrong');
            return $error;
        }
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
        $categories=Category::all();
       $category=Category::where('id',$id)->first();
//       dd($category);
         return view('backend.admin.categories.edit',compact('category','categories'));
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

        $validation = $this->validate($request, [
            'category' => 'required',

        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        try {
            $save = Category::where('id',$id)->find($id);
            $save->update([
                'category_name' => $request->category,
                'parent_id' => $request->parent
            ]);

            session()->flash('type', 'success');
            session()->flash('message', 'Category Added !');
            return redirect()->back();

        } catch (\Exception $error) {
            session()->flash('type', 'danger');
            session()->flash('message', 'Oh no!Something went to wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::where('id',$id)->find($id);
        $category->destroy($id);
        return redirect()->back();
    }
}
