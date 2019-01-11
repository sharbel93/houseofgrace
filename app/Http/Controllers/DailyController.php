<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Purifier;
use Session;
use App\Daily;

class DailyController extends Controller
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
        $dailys = Daily::all();
        return view('manage.dailies.index')->withDailys($dailys);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.dailies.create');
    }
//
//    public function delete($id)
//    {
//        $comment = Comment::find($id);
//        return view('comments.delete')->withComment($comment);
//    }

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
           'by' => 'required|max:255',
           'content' => 'required'
        ));

        $daily =  new Daily;
        $daily->title = $request->title;
        $daily->by = $request->by;
        $daily->content = Purifier::clean($request->content);
        $daily->save();


        return redirect()->route('daily.show', $daily->id)->with('success', 'Successfully Saved!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daily = Daily::findorFail($id);
        return view('manage.dailies.show')->withDaily($daily);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daily = Daily::find($id);
        return view('manage.dailies.edit')->withDaily($daily)->with('success','Edited successfully!');
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
            'by' => 'required|max:255',
            'content' => 'required'
        ));

        $daily =  Daily::findOrFail($id);
        $daily->title = $request->input('title');
        $daily->by = $request->input('by');
        $daily->content = Purifier::clean($request->input('content'));
        $daily->save();
        return redirect()->route('daily.show', $daily->id)->with('success', 'Updated successfully!');
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
