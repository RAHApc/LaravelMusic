<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categores=Category::all();
        return view('Admin.category.index',compact('categores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryParent=Category::with('children')->whereNull('parent_id')->get();
        return view('Admin.category.create',compact('categoryParent'));
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
            'name'=>'required'
        ]);

        if($request->get('parent_id')=="انتخاب عنوان گروه")
        {
            $parentId=null;
        }else
        {
            $parentId=$request->get('parent_id');
        }
        $category=new Category([
            'parent_id'=>$parentId,
            'name'=>$request->get('name'),
            'slug'=>$request->get('slug'),
            'description'=>$request->get('description')
        ]);
        $category->save();
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categoryParent=Category::with('children')->whereNull('parent_id')->get();

        return view('Admin.category.edit',compact('category','categoryParent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
