@extends('layouts.app')
@extends('layouts.layout')

@section('content')

<h1> {{$team->name}}</h1>

@foreach ($team->players as $player)
<form method="POST" action="/player/{{$player->id}}"> @method('PATCH') @csrf 
    <input type="text" name="playernr" placeholder="" value="{{$player->playernr}}">
    <input type="text" name="name" placeholder="" value="{{$player->name}}">
    <input type="text" name="position" placeholder="" value="{{$player->position}}">
    <input type="integer" name="move" placeholder="" value="{{$player->move}}">
    <input type="integer" name="strength" placeholder="" value="{{$player->strength}}">
    <input type="integer" name="agility" placeholder="" value="{{$player->agility}}">
    <input type="integer" name="armour" placeholder="" value="{{$player->armour}}">
    <input type="text" name="skills" placeholder="" value="{{$player->skills}}">
    <input type="text" name="extraSkillA" placeholder="" value="{{$player->extraSkillA}}"> 
    <input type="text" name="extraSkillB" placeholder="" value="{{$player->extraSkillB}}">
    <input type="text" name="extraSkillC" placeholder="" value="{{$player->extraSkillC}}">
    <input type="text" name="extraSkillD" placeholder="" value="{{$player->extraSkillD}}">
    <input type="text" name="extraSkillE" placeholder="" value="{{$player->extraSkillE}}">
    <input type="text" name="extraSkillF" placeholder="" value="{{$player->extraSkillF}}">
    <label class="checkbox" $for="missingNextGame">
        <input type="checkbox" name="missingNextGame" {{$player->missingNextGame ? 'checked' : ''}}>
    </label>
    <input type="integer" name="niglingInjury" placeholder="" value="{{$player->niglingInjury}}">
    <input type="integer" name="completions" placeholder="" value="{{$player->completions}}">
    <input type="integer" name="touchdown" placeholder="" value="{{$player->touchdown}}">
    <input type="integer" name="intercept" placeholder="" value="{{$player->intercept}}">
    <input type="integer" name="casualtie" placeholder="" value="{{$player->casualtie}}">
    <input type="integer" name="mvp" placeholder="" value="{{$player->mvp}}">
    <input type="integer" name="spp" placeholder="" value="{{$player->spp}}">
    <input type="integer" name="cost" placeholder="" value="{{$player->cost}}">
    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
</form>
<form method="POST" action="/player/{{$player->id}}">
    @method('DELETE')
    @csrf
<button type="submit"><i class="far fa-trash-alt"></i></button> 
</form>
@endforeach


@endsection

