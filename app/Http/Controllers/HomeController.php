<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Event;
use App\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $musics = Music::with(['likes'=> function ($query) {
            $query->where('user_ip', request()->ip());
        }])->get();
        $childrenCategory = Category::with('children')->whereNotNull('parent_id')->get();
        $albums = Album::paginate(8);
        $pivotListMusics = DB::table('album_musics')->pluck('music_id');
        $listMusicsNotPivot=Music::whereNotIn('id', $pivotListMusics)->get();

//        if(Category::whereName('پاپ')->first()->musics())
//        {
            $categoryMusicPop=Category::whereName('پاپ')->first()->musics()->get();
//        }else{
//            $categoryMusicPop='';
//        }

        $events=Event::orderBy('dateStart','desc')->get();
        return view('Home.base', compact( 'musics','childrenCategory','albums','listMusicsNotPivot','categoryMusicPop','events'));
    }

    public function search(Request $request)
    {
        $keyword=$request->item;
       $albumsearch=Album::search($keyword)->get();
       return response()->json(['t'=>$albumsearch]);
    }
}


