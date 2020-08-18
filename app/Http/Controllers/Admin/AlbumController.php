<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\Category;
use App\Singer;
use Illuminate\Http\Request;

class AlbumController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('Admin.album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::with('children')->whereNotNull('parent_id')->get();
        $singers = Singer::all();
        return view('Admin.album.create', compact('singers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate=Category::find($request->get('category_id'));

        $image = $request->file('image_url');

        $filename = $image->getClientOriginalName();
        $location = 'uploads/images';
        $image->move($location, $filename);
        $imageUrl = $location . '/' . $filename;
        $album = new Album([
            'singer_id'=>$request->get('singer_id'),
            'name' => $request->get('name'),
            'image_url' => $imageUrl,
            'description' => $request->get('description')
        ]);
        $album->save();


        Album::find($album->id)->categories()->save($cate);

        return redirect(route('albums.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $singers=Singer::all();
        return view('Admin.album.edit', compact('album','singers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        if (!empty($request->file('image_url'))) {
            $image = $request->file('image_url');
            $filename = $image->getClientOriginalName();
            $location = 'uploads/images';
            $image->move($location, $filename);
            $imageUrl = $location . '/' . $filename;
        } else {
            $imageUrl = $album->image_url;
        }


        $album['name'] = $request->get('name');
        $album['image_url'] = $imageUrl;
        $album['description'] = $request->get('description');
        $album->save();

        return redirect(route('albums.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Album $album
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return back();
    }
}
