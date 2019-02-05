<?php

namespace App\Http\Controllers;

use App\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = player::all();
        return view('/teamshow', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(player $player)
    {
        return view('/teamshow', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, player $player)
    {
        $player->update([
            'team_id' => $team->id,
            'playernr' => request('playernr'),
            'name' => request('name'),
            'position' => request('position'),
            'cost' => request('cost'),
            'move'=> request('move'),
            'strenght' => request('strength'),
            'agitity' => request('agility'),
            'armour' => request('armour'),
            'skills' => request('skills'),
            'extraSkillA' => request('extraSkillA'),
            'extraSkillC' => request('extraSkillB'),
            'extraSkillC' => request('extraSkillC'),
            'extraSkillD' => request('extraSkillD'),
            'extraSkillE' => request('extraSkillE'),
            'extraSkillF' => request('extraSkillF'),
            'missingNextGame' => request('missingNextGame'),
            'niglingInjury' => request('niglingInjury'),
            'completions' => request('completions'),
            'touchdown' => request('touchdown'),
            'intercept' => request('intercept'),
            'casualtie' =>request('casualtie'),
            'mvp' => request('mvp'),
            'ssp' => request('ssp')
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(player $player)
    {
        //
    }
}
