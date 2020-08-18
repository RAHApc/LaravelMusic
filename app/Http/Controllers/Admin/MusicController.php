<?php

namespace App\Http\Controllers\admin;


use App\Album;
use App\Category;
use App\Music;
use App\Singer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use SweetAlert;

class MusicController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::all();
//        alert()->info('Info Message', 'Optional Title');

        return view('Admin.music.index', compact('musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $singers = Singer::all();
           $albums = Album::all();
           $categories = Category::with('children')->whereNotNull('parent_id')->get();
           return view('Admin.music.create', compact('categories', 'singers', 'albums'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categor = Category::find($request->get('category_id'));

        $image = $request->file('image_url');
        $mp3 = $request->file('file_url');

        $fileNameImage = $image->getClientOriginalName();
        $fileNameMp3 = $mp3->getClientOriginalName();
        $image->move('uploads/images', $fileNameImage);
        $mp3->move('uploads/files', $fileNameMp3);
        $UrlImage = 'uploads/images/' . $fileNameImage;
        $UrlFile = 'uploads/files/' . $fileNameMp3;
        $music = new Music([
            'singer_id' => $request->get('singer_id'),
            'name' => $request->get('name'),
            'image_url' => $UrlImage,
            'file_url' => $UrlFile,
            'fullTime' => $request->get('fullTime'),
            'description' => $request->get('description')
        ]);
        $music->save();

        if ($request->get('album_id') != "انتخاب نام آلبوم") {
            $album = Album::find($request->get('album_id'));
            Music::find($music->id)->albums()->save($album);
        }


        Music::find($music->id)->categories()->save($categor);

        alert()->info('Info Message', 'Optional Title');

        return redirect()->route('musics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        $categorId=null;
        $albumId = null;
        $albums = null;

        foreach ($music->albums()->get() as $musicId) {
            if ($musicId->pivot->album_id) {
                $albumId = $musicId->pivot->album_id;
            } else {
                $albumId = null;
            }
        }
        $singers = Singer::all();
        if ($albumId == null) {
            $albums == null;
        } else {
            $albums = Album::all();
        }
        $categoryId=\DB::table('categorizables')->where('categorizable_id',$music->id)->where('categorizable_type','App\Music')->get();
        foreach ($categoryId as $categor)
        {
            $categorId=$categor->category_id;
        }

        $categories = Category::with('children')->whereNotNull('parent_id')->get();

        return view('Admin.music.edit', compact('music','categorId', 'categories', 'albumId', 'albums', 'singers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {

        if (!empty($request->file('image_url')) || !empty($request->file('file_url'))) {
            $image = $request->file('image_url');
            $mp3 = $request->file('file_url');

            $fileNameImage = $image->getClientOriginalName();
            $fileNameMp3 = $mp3->getClientOriginalName();
            $image->move('uploads/images', $fileNameImage);
            $mp3->move('uploads/files', $fileNameMp3);
            $UrlImage = 'uploads/images/' . $fileNameImage;
            $UrlFile = 'uploads/files/' . $fileNameMp3;
        } else {
            $UrlImage = $music->image_url;
            $UrlFile = $music->file_url;
        }

        $music->singer_id = $request->get('singer_id');
        $music->name = $request->get('name');
        $music->image_url = $UrlImage;
        $music->file_url = $UrlFile;
        $music->fullTime = $request->get('fullTime');
        $music->description = $request->get('description');

        $music->save();
        if (\DB::table('album_musics')->where('music_id', $music->id)->exists() && \DB::table('album_musics')->where('album_id', $request->get('album_id'))->exists()) {
            return redirect()->route('musics.index');
        } else {
            if ($request->get('album_id') != null) {
                $music->albums()->save($request->get('album_id'));
            }
            return redirect()->route('musics.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Music $music
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Music $music)
    {
        $music->delete();
        return back();
    }
}
