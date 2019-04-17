@extends('layouts.app')
@extends('layouts.layout')

@section('content')

nieuwe skill <br>
{{$player->name}}


<form method="POST" action="/player/{{$player->id}}/skill"> @method('PATCH') @csrf 
    <input type="text" name="extraSkillA" placeholder="new skill" value="{{$player->extraSkillA}}"> 
    <input type="text" name="extraSkillB" placeholder="new skill" value="{{$player->extraSkillB}}">
    <input type="text" name="extraSkillC" placeholder="new skill" value="{{$player->extraSkillC}}">
    <input type="text" name="extraSkillD" placeholder="new skill" value="{{$player->extraSkillD}}">
    <input type="text" name="extraSkillE" placeholder="new skill" value="{{$player->extraSkillE}}">
    <input type="text" name="extraSkillF" placeholder="new skill" value="{{$player->extraSkillF}}">
    <input type="integer" name="cost" placeholder="Total Cost" value="{{$player->cost}}">
    <button type="submit" class="btn btn-primary">save</button>
</form>

@endsection
