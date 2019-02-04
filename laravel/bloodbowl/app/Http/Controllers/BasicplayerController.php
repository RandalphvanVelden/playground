<?php

namespace App\Http\Controllers;

use App\basicplayer;
use Illuminate\Http\Request;

class BasicplayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basicplayers = basicplayer::all();

        return view('/bpindex', compact('basicplayers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/bpcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Basicplayer::create(request([
        'team',
        'position',
        'cost',
        'qty',
        'move',
        'strength',
        'agility',
        'armour',
        'skills',
        'skillChoiceSingleA',
        'skillChoiceSingleB',
        'skillChoiceSingleC',
        'skillChoiceDoubleA',
        'skillChoiceDoubleB',
        'skillChoiceDoubleC'
        ]));
       
        return redirect('/basicplayer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function show(basicplayer $basicplayer)
    {
        // return view('project.show'), compact('project');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function edit(basicplayer $basicplayer)
    {

        return view('/bpedit', compact('basicplayer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function update(basicplayer $basicplayer)
    {       
        $basicplayer->update(request([
            'team',
            'position',
            'cost',
            'qty',
            'move',
            'strength',
            'agility',
            'armour',
            'skills',
            'skillChoiceSingleA',
            'skillChoiceSingleB',
            'skillChoiceSingleC',
            'skillChoiceDoubleA',
            'skillChoiceDoubleB',
            'skillChoiceDoubleC'
            ]));
        
       
       return redirect('/basicplayer');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(basicplayer $basicplayer)
    {
        $basicplayer->delete();
        
        return redirect('/basicplayer');
    }
}
