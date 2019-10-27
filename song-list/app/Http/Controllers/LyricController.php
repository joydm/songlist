<?php

namespace App\Http\Controllers;
use App\Lyric;
use Illuminate\Http\Request;

class LyricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lyrics = Lyric::all();

        return view('lyrics.index', compact('lyrics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lyrics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'       =>'required',
            'artist'      =>'required',
            'song_lyrics' =>'required'
        ]);

        $lyric = new Lyric([
            'title'       => $request->get('title'),
            'artist'      => $request->get('artist'),
            'song_lyrics' => $request->get('song_lyrics')
        ]);
        $lyric->save();
        return redirect('/lyrics')->with('success', 'Song saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lyric = Lyric::find($id);
        return view('lyrics.edit', compact('lyric'));
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
        $request->validate([
            'title'       =>'required',
            'artist'      =>'required',
            'song_lyrics' =>'required'
        ]);

        $lyric = Lyric::find($id);
        $lyric->title   = $request->get('title');
        $lyric->artist  = $request->get('artist');
        $lyric->song_lyrics  = $request->get('song_lyrics');
        $lyric->save();

        return redirect('lyrics')->with('success', 'Song updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lyric = Lyric::find($id);
        $lyric->delete();

        return redirect('/lyrics')->with('sucess','Song deleted!');
    }
}
