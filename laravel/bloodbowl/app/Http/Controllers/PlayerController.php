<?php

namespace App\Http\Controllers;

use App\player;
use App\teams;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   return $player;
        
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
        return view('/playeredit', compact('player'));
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
            'playernr' => request('playernr'),
            'name' => request('name'),
            'position' => request('position'),
            'cost' => request('cost'),
            'move'=> request('move'),
            'strength' => request('strength'),
            'agility' => request('agility'),
            'armour' => request('armour'),
            'skills' => request('skills'),
            'cost' => request('cost')
            ]);

            return redirect('/team');
    }

    public function skilledit(player $player)
    {
        return view('/playerskilledit', compact('player'));
    }

    public function skillupdate(Request $request, player $player)
    {
        
        $player->update([
            'extraSkillA' => request('extraSkillA'),
            'extraSkillB' => request('extraSkillB'),
            'extraSkillC' => request('extraSkillC'),
            'extraSkillD' => request('extraSkillD'),
            'extraSkillE' => request('extraSkillE'),
            'extraSkillF' => request('extraSkillF'),
            'cost' => request('cost')
            ]);

            return redirect('/team');
    }

    public function missingNextGameupdate(Request $request, player $player)
    {
        
        $player->update([
            'missingNextGame' => request()->has('missingNextGame')
            ]);

            return back();
    }

    public function nigglingupdate(Request $request, player $player)
    { 
        $player->update([
            'niglingInjury' => request('niglingInjury')
            ]);

            return back();
    }

    public function completionupdate(Request $request, player $player)
    { 
        $player->update([
            'completions' => request('completions')           
            ]);

            return back();
    }

    public function touchdownupdate(Request $request, player $player)
    { 
        $player->update([
            'touchdown' => request('touchdown')
            ]);

            return back();
    }

    public function interceptupdate(Request $request, player $player)
    { 
        $player->update([
            'intercept' => request('intercept')
            ]);

            return back();
    }


    public function casualtieupdate(Request $request, player $player)
    { 
        $player->update([
            'casualtie' =>request('casualtie')            
            ]);

            return back();
    }

    public function mvpupdate(Request $request, player $player)
    { 
        $player->update([
            'mvp' => request('mvp')
            ]);

            return back();
    }

    public function sppupdate(Request $request, player $player)
    { 
        $player->update([
            'ssp' => request('ssp')
            ]);

            return back();
    }









    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(player $player)
    {
        $player->update([
            
            'name' => null,
            'position' => null,
            'cost' => null,
            'move'=> null,
            'strength' => null,
            'agility' => null,
            'armour' => null,
            'skills' => null,
            'extraSkillA' => null,
            'extraSkillC' => null,
            'extraSkillC' => null,
            'extraSkillD' => null,
            'extraSkillE' => null,
            'extraSkillF' => null,
            'missingNextGame' => 0,
            'niglingInjury' => null,
            'completions' => null,
            'touchdown' => null,
            'intercept' => null,
            'casualtie' => null,
            'mvp' => null,
            'ssp' => null
            ]);

            return back();
    }
}

