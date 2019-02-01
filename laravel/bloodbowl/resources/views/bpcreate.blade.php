@extends('layouts.app');
@extends('layouts.layout');

@section('content')
    <h1>create</h1>

    <form method="POST" action="/basicplayer">
        @csrf
        <input type="text" name="team" placeholder="team name">
        <input type="text" name="position" placeholder="position">
        <input type="integer" name="cost" placeholder="cost">    
        <input type="integer" name="qty" placeholder="quatity">    
        <input type="integer" name="move" placeholder="move">   
        <input type="integer" name="strength" placeholder="strength"> 
        <input type="integer" name="agility" placeholder="agility"> 
        <input type="integer" name="armour" placeholder="armour"> 
        <input type="text" name="skills" placeholder="skills">
        <input type="text" name="skillChoiceSingleA" placeholder="singleSkill">
        <input type="text" name="skillChoiceSingleB" placeholder="singleSkill">
        <input type="text" name="skillChoiceSingleC" placeholder="singleSkill">
        <input type="text" name="skillChoiceDoubleA" placeholder="doubleSkill">
        <input type="text" name="skillChoiceDoubleB" placeholder="doubleSkill">
        <input type="text" name="skillChoiceDoubleC" placeholder="doubleSkill">
        <button type="submit">save</button>
        
    </form>
@endsection
