@extends('layouts.app');
@extends('layouts.layout');

@section('content')
<h1>edit team</h1>


<form method="POST" action="/team/{{$team->id}}">
    @method('PATCH')
    @csrf 
    
    <input class="form-control form-control-sm" type="text" name="name" placeholder="team name" value="{{$team->name}}">
    <input class="form-control form-control-sm" type="text" name="race" placeholder="race" value="{{$team->race}}">
    <input class="form-control form-control-sm" type="integer" name="reroll" placeholder="re-rolls" value="{{$team->reroll}}">   
    <input class="form-control form-control-sm" type="integer" name="rerollValue" placeholder="re-roll cost" value="{{$team->rerollValue}}">  
    <input class="form-control form-control-sm" type="integer" name="fanfactor" placeholder="fanfactor" value="{{$team->fanfactor}}">  
    <input class="form-control form-control-sm" type="integer" name="assistantCoach" placeholder="assistant Coaches" value="{{$team->assistantCoach}}">  
    <input class="form-control form-control-sm" type="integer" name="cheerleader" placeholder="cherleaders" value="{{$team->cheerleader}}">  
    <input class="form-control form-control-sm" type="integer" name="apothecary" placeholder="apothecary" value="{{$team->apothecary}}">  
    <input class="form-control form-control-sm" type="integer" name="teamValue" placeholder="team Value" value="{{$team->teamValue}}">  
    <input class="form-control form-control-sm" type="integer" name="treasury" placeholder="treasury" value="{{$team->treasury}}">
    <button type="submit" class="btn btn-primary">edit</button>
    
</form> 


 


@endsection
