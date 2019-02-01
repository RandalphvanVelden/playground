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
        $basicplayer = new Basicplayer();
        $basicplayer->team = request('team');
        $basicplayer->position = request('position');
        $basicplayer->cost = request('cost');
        $basicplayer->qty = request('qty');
        $basicplayer->move = request('move');
        $basicplayer->strength = request('strength');
        $basicplayer->agility = request('agility');
        $basicplayer->armour = request('armour');
        $basicplayer->skills = request('skills');
        $basicplayer->skillChoiceSingleA = request('skillChoiceSingleA');
        $basicplayer->skillChoiceSingleB = request('skillChoiceSingleB');
        $basicplayer->skillChoiceSingleC = request('skillChoiceSingleC');
        $basicplayer->skillChoiceDoubleA = request('skillChoiceDoubleA');
        $basicplayer->skillChoiceDoubleB = request('skillChoiceDoubleB');
        $basicplayer->skillChoiceDoubleC = request('skillChoiceDoubleC');

       $basicplayer->save();
        
       
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $basicplayer = basicplayer::find($id);

        return view('/bpedit', compact('basicplayer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $basicplayer = basicplayer::find($id);

       
        $basicplayer->team = request('team');
        $basicplayer->position = request('position');
        $basicplayer->cost = request('cost');
        $basicplayer->qty = request('qty');
        $basicplayer->move = request('move');
        $basicplayer->strength = request('strength');
        $basicplayer->agility = request('agility');
        $basicplayer->armour = request('armour');
        $basicplayer->skills = request('skills');
        $basicplayer->skillChoiceSingleA = request('skillChoiceSingleA');
        $basicplayer->skillChoiceSingleB = request('skillChoiceSingleB');
        $basicplayer->skillChoiceSingleC = request('skillChoiceSingleC');
        $basicplayer->skillChoiceDoubleA = request('skillChoiceDoubleA');
        $basicplayer->skillChoiceDoubleB = request('skillChoiceDoubleB');
        $basicplayer->skillChoiceDoubleC = request('skillChoiceDoubleC');

       $basicplayer->save();
        
       
       return redirect('/basicplayer');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\basicplayer  $basicplayer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        basicplayer::find($id)->delete();
        
        return redirect('/basicplayer');
    }
}
