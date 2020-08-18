<?php

namespace App\Http\Controllers\admin;


use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions=Permission::latest()->paginate(20);
        return view('Admin.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.permission.create');
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
            'name'=>'required',
            'label'=>'required'
        ]);

        $permission=new Permission([
            'name'=>$request->get('name'),
            'label'=>$request->get('label')
        ]);
        $permission->save();
        return redirect(route('permissions.index'));
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
    public function edit(Permission $permission)
    {
        return view('Admin.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->all());

        return redirect(route('permissions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back();
    }
}
