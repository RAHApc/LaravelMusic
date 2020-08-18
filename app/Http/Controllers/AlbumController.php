<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $childrenCategory = Category::with('children')->whereNotNull('parent_id')->get();
        $albums = Album::with('singer')->paginate(8);
        return view('Home.content.music.album', compact('childrenCategory', 'albums'));
    }

    public function listItem($id)
    {
        if ($id == 0) {
            $categoryAlbum = Album::all();
        } else {
            $categoryAlbum = Category::find($id)->albums()->get();
        }

        return view('Home.content.album.item', compact('categoryAlbum'));
    }

    public function trackAlbum(Album $album)
    {
        $musics = $album->musics()->with(['likes'=> function ($query) {
            $query->where('user_ip', request()->ip());
        }])->get();

        $singers = Album::with('singers')->where('singer_id', $album->singer_id)->get();

        return view('Home.content.music.trackAlbum', compact( 'album', 'musics', 'singers'));
    }
}
