@extends('layouts.app')
@extends('layouts.layout')

@section('content')





<form method="POST" action="/player/{{$player->id}}"> @method('PATCH') @csrf 
    <input type="text" name="playernr" placeholder="" value="{{$player->playernr}}">
    <input type="text" name="name" placeholder="Name" value="{{$player->name}}">
    <input type="text" name="position" placeholder="position" value="{{$player->position}}">
    <input type="integer" name="move" placeholder="MA" value="{{$player->move}}">
    <input type="integer" name="strength" placeholder="ST" value="{{$player->strength}}">
    <input type="integer" name="agility" placeholder="AG" value="{{$player->agility}}">
    <input type="integer" name="armour" placeholder="AV" value="{{$player->armour}}">
    <input type="text" name="skills" placeholder="Skills" value="{{$player->skills}}">
    <input type="integer" name="cost" placeholder="Total Cost" value="{{$player->cost}}">
    <button type="submit" class="btn btn-primary">save</button>
</form>

@endsection
