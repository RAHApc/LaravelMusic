<?php

namespace App\Http\Controllers\admin;

use App\Event;
use Illuminate\Http\Request;

class EventController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::all();
        return view('Admin.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image= $request->file('image_url');
        $fileNameImage = $image->getClientOriginalName();
        $image->move('uploads/images', $fileNameImage);
        $UrlImage = 'uploads/images/' . $fileNameImage;

        $dateStart=str_replace('/','-',$request->get('dateStart'));
        $dateEnd =str_replace('/','-',$request->get('dateEnd'));

        $event=new Event([
            'dateStart'=>$dateStart,
            'dateEnd'=>$dateEnd,
            'timeStartEnd'=>$request->get('timeStartEnd'),
            'name'=>$request->get('name'),
            'city'=>$request->get('city'),
            'image_url'=>$UrlImage,
            'description'=>$request->get('description')
        ]);
        $event->save();
        return redirect(route('events.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('Admin.event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        if (!empty($request->file('image_url'))) {
            $image = $request->file('image_url');

            $fileNameImage = $image->getClientOriginalName();
            $image->move('uploads/images', $fileNameImage);
            $UrlImage = 'uploads/images/' . $fileNameImage;
        } else {
            $UrlImage = $event->image_url;
        }
        $event->dateStart = $request->get('dateStart');
        $event->dateEnd = $request->get('dateEnd');
        $event->timeStartEnd = $request->get('timeStartEnd');
        $event->name = $request->get('name');
        $event->city = $request->get('city');
        $event->image_url = $UrlImage;
        $event->description = $request->get('description');

        $event->save();
        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }
}
