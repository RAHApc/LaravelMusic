<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Comment;
use App\Event;
use App\Http\Requests\CommendStoreVali;
use App\Like;
use App\Music;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MusicController extends Controller
{
    public function listItemMusic($id)
    {
        if ($id == 0) {
            $categoryAlbum = Album::with('singer')->paginate(8);
        } else {
            $categoryAlbum = Category::find($id)->albums()->with('singer')->paginate(8);
        }
        $status = true;
        return view('Home.content.album.item', compact('categoryAlbum', 'status'));
    }

    public function Tracks()
    {
        $trac = Music::all();
        return json_encode($trac);
    }

    public function track(Music $music)
    {
        $musicLike = Like::where('music_id',$music->id)->get();
        $pivotListMusics = \DB::table('album_musics')->pluck('music_id');
        $listMusicsNotPivot=$music::whereNotIn('id', $pivotListMusics)->get();
        $comments = $music->comments()->where('status', 'true')->get();
        return view('Home.content.track.singleTrack', compact('music','musicLike',  'listMusicsNotPivot','comments'));
    }

    public function itemAudio($id)
    {
        $itemmusic = Music::find($id);
        return json_encode($itemmusic);
    }

    public function Comment(CommendStoreVali $request)
    {
        Music::find($request->id)->comments()->create([
            'body' => $request->get('body'),
            'name'=>$request->get('name'),
            'dateComment'=>Carbon::now()
        ]);
//        $message='نظر شما ثبت شد.';
        return response()->json(['status'=>true]);
    }

    public function trackMusic()
    {
        $listMusics = Music::paginate(6);
        return view('Home.content.track.listTrack', compact('listMusics'));
    }

    public function selectItemMusic($id)
    {
        switch ($id) {
            case '0':
                $listMusics = Music::paginate(6);
                break;

            case '1':
                $listMusics = Category::find(2)->musics()->paginate(6);
                break;

            case '3':
                $ids = \DB::table('album_musics')->pluck('music_id');
                $listMusics = Music::whereNotIn('id', $ids)->paginate(6);
                break;
        }
        return view('Home.content.track.listTrack.listTrackMusic', compact('listMusics'));
    }

    public function event()
    {
        $events = Event::orderBy('dateStart','desc')->paginate(4);
        return view('Home.content.event.event', compact('events'));
    }

    public function like($id)
    {
        $checkLike=Like::where('music_id', $id)->whereAnd('user_ip', request()->ip());
        if ($checkLike->exists()) {
            $checkLike->delete();
            return json_encode(['status' => true, 'color' => 'colorGray']);
        } else {
            $like = new Like([
                'music_id' => $id,
                'user_ip' => request()->ip()
            ]);
            $like->save();
            return json_encode(['status' => true, 'color' => 'colorRed']);
        }
    }

    public function download(Music $music,Request $request)
    {
        $hash=$request->h.'singer: '.$music->singer->name;
        if($hash===$request->mac)
        {
            return response()->download(public_path($music->file_url));
        }else{
            return 'link kharabe bashar!' ;
        }

    }
}
