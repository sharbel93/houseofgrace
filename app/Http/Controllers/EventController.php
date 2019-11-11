<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Purifier;
use Session;
use App\Event;
use File;
use Intervention\Image\ImageManagerStatic as Image;
class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator|editor|author|contributor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_At','ASC')->get();
        return view('manage.events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'venue' => 'required|max:255',
            'location' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required'
        ));

        $event = new Event;
        $event->title = $request->title;
        $event->venue = $request->venue;
        $event->location = $request->location;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->host = $request->host;
        $event->guest = $request->guest;
        $event->content = Purifier::clean($request->content);

        if( $request->hasFile('thumbnail') ) {
            $event_thumbnail     = $request->file('thumbnail');
            $filename           = str_slug($request->title, $separator = '-').date('His'). '.jpg';
            $location =  public_path('/events/images/' . $filename );
            Image::make($event_thumbnail)->resize(800,400)->save($location);
            $event->thumbnail = $filename;
        }

        $event->save();
        return redirect()->route('events.show',  $event->id)->with('success', 'Event Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('manage.events.show')->withEvent($event);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('manage.events.edit')->withEvent($event)->with('success', 'Edited Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'venue' => 'required|max:255',
            'location' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ));

        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->venue = $request->input('venue');
        $event->location = $request->input('location');
        $event->created = $request->input('created');
        $event->content = Purifier::clean($request->input('content'));

        // Check if file is present
        if( $request->hasFile('thumbnail') ) {
            $event_thumbnail     = $request->file('thumbnail');
            $filename           = str_slug($request->title, $separator = '-').date('His'). '.png';
            $location =  public_path('/events/images/' . $filename );
            Image::make($event_thumbnail)->resize(800, 400)->save( $location );
            $oldFilename = $event->thumbnail;

            // Delete the old photo
            if(!$event->thumbnail == null){
                $oldFilename = $event->thumbnail;
                $filename1 = public_path().'/events/images/'.$oldFilename;
                \File::delete($filename1);
            }

            // update database
            $event->thumbnail = $filename;
        }
        $event->save();
        return redirect()->route('events.show', $event->id)->with('success', 'The event is successfully saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
