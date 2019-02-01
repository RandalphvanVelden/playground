@extends('layouts.app');
@extends('layouts.layout');

@section('content')

<h1 class="title">edit project </h1>

<form method="POST" action="/basicplayer/{{$basicplayer->id}}">
    @method('PATCH')
    @csrf
    <input class="form-control form-control-sm" type="text" name="team" placeholder="team name" value="{{$basicplayer->team}}">
    <input class="form-control form-control-sm" type="text" name="position" placeholder="position" value="{{$basicplayer->position}}">
    <input class="form-control form-control-sm" type="integer" name="cost" placeholder="cost" value="{{$basicplayer->cost}}">    
    <input class="form-control form-control-sm" type="integer" name="qty" placeholder="quatity" value="{{$basicplayer->qty}}">
    <input class="form-control form-control-sm" type="integer" name="move" placeholder="move" value ="{{$basicplayer->move}}">   
    <input class="form-control form-control-sm" type="integer" name="strength" placeholder="strength" value="{{$basicplayer->strength}}"> 
    <input class="form-control form-control-sm" type="integer" name="agility" placeholder="agility" value="{{$basicplayer->agility}}"> 
    <input class="form-control form-control-sm" type="integer" name="armour" placeholder="armour" value="{{$basicplayer->armour}}">  
    <input class="form-control form-control-sm" type="text" name="skills" placeholder="skills" value="{{$basicplayer->skills}}"> 
    <input class="form-control form-control-sm" type="text" name="skillChoiceSingleA" placeholder="singleSkill" value="{{$basicplayer->skillChoiceSingleA}}"> 
    <input class="form-control form-control-sm" type="text" name="skillChoiceSingleB" placeholder="singleSkill" value="{{$basicplayer->skillChoiceSingleB}}"> 
    <input class="form-control form-control-sm" type="text" name="skillChoiceSingleC" placeholder="singleSkill" value="{{$basicplayer->skillChoiceSingleC}}"> 
    <input class="form-control form-control-sm" type="text" name="skillChoiceDoubleA" placeholder="doubleSkill" value="{{$basicplayer->skillChoiceDoubleA}}"> 
    <input class="form-control form-control-sm" type="text" name="skillChoiceDoubleB" placeholder="doubleSkill" value="{{$basicplayer->skillChoiceDoubleB}}"> 
    <input class="form-control form-control-sm"type="text" name="skillChoiceDoubleC" placeholder="doubleSkill" value="{{$basicplayer->skillChoiceDoubleC}}"> 
    <button type="submit" class="btn btn-primary">edit</button> 

</form>

      
@endsection


<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">