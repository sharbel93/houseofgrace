<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Purifier;
use Session;
use App\Sermon;
class SermonController extends Controller
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
        $sermons = Sermon::orderBy('created','ASC')->get();
        return view('manage.sermons.index')->withSermons($sermons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.sermons.create');
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
             'preacher' => 'required|max:255',
              'created' => 'required|date',
             'content' => 'required'
    ));


        $sermon = new Sermon;
        $sermon->title = $request->title;
        $sermon->preacher = $request->preacher;
        $sermon->created = $request->created;
        $sermon->content = $request->content;
        $sermon->save();

        return redirect()->route('sermon.show', $sermon->id)->with('success', 'Successfully Saved ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sermon = Sermon::findorFail($id);
        return view('manage.sermons.show')->withSermon($sermon);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sermon = Sermon::findorFail($id);
        return view('manage.sermons.edit')->withSermon($sermon)->with('success', 'Edited Successfully');
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
            'preacher' => 'required|max:255',
            'created' => 'required|date',
            'content' => 'required'
        ));

        $sermon = Sermon::findOrFail($id);
        $sermon->title = $request->input('title');
        $sermon->preacher = $request->input('preacher');
        $sermon->created = $request->input('created');
        $sermon->content = Purifier::clean($request->input('content'));
        $sermon->save();

        return redirect()->route('sermon.show', $sermon->id)->with('success', 'Updated successfully');
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
