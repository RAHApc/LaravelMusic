<?php

namespace App\Http\Controllers\Admin;


use App\Role;
use App\User;
use Illuminate\Http\Request;

class LevelAdminController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::latest()->with('users')->paginate(20);
        return view('Admin.levelAdmin.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::whereTypes('admin')->get();
        $roles=Role::all();
        return view('Admin.levelAdmin.create',compact('users','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request,User $user)
    {

        $this->validate($request,[
            'user_id'=>'required',
            'role_id'=>'required',
        ]);

        $user->find($request->user_id)->roles()->sync($request->role_id);
        return redirect(route('levels.index'));
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
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        $roles=Role::all();

        return view('Admin.levelAdmin.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->role_id);
        return redirect(route('levels.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        return back();
    }
}
