<?php

namespace App\Http\Controllers\admin;


use App\Singer;
use Illuminate\Http\Request;

class SingerController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers=Singer::all();
        return view('Admin.singer.index',compact('singers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.singer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $singer=new Singer([
            'name'=>$request->get('name')
        ]);
        $singer->save();
        return redirect(route('singers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function show(Singer $singer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function edit(Singer $singer)
    {
        return view('Admin.singer.edit',compact('singer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Singer $singer)
    {
        $singer->update($request->all());
        return redirect(route('singers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Singer $singer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Singer $singer)
    {
        $singer->delete();
        return back();
    }
}
