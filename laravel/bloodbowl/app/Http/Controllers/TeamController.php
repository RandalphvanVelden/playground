<?php

namespace App\Http\Controllers;

use App\team;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Auth;



class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = team::all();
        

        return view('/teamindex', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/teamcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $id=array('userid' => \Auth::user()->id);
    

        Team::create(array_merge($id,request([
                'name',
                'race',
                'reroll',
                'rerollValue',
                'fanfactor',
                'assistantCoach',
                'cheerleader',
                'apothecary',
                'teamValue'
        ])));

             return redirect('/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        return view('/teamedit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {

        $team->update([
                'name' => request('name'),
                'race' => request('race'),
                'userid' => \Auth::user()->id,
                'reroll' => request('reroll'),
                'rerollValue' => request('rerollValue'),
                'fanfactor' => request('fanfactor'),
                'assistantCoach' => request('assistantCoach'),
                'cheerleader' => request('cheerleader'),
                'apothecary' => request('apothecary'),
                'teamValue'=> request('teamValue')
        ]);

             return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        $team->delete();
        
        return redirect('/team');
    }
}
