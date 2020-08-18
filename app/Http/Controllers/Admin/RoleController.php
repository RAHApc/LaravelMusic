<?php

namespace App\Http\Controllers\admin;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::latest()->paginate(20);
        return view('Admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('Admin.role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Role $role)
    {
        $request->validate([
            'name'=>'required',
            'label'=>'required',
            'permission'=>'required'
        ]);

        $role=Role::create($request->all());
        $role->permissions()->sync($request->permission);

        return redirect(route('roles.index'));
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
    public function edit(Role $role)
    {
        $permissions=Permission::all();
        return view('Admin.role.edit',compact('permissions','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Role $role)
    {

        $request->validate([
            'name'=>'required',
            'label'=>'required',
        ]);

        $role->update($request->all());
        $role->permissions()->sync($request->permission);

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
