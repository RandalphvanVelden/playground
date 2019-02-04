@extends('layouts.app');
@extends('layouts.layout');

@section('content')


<form method="POST" action="/team">
    @csrf
    
    <input class="form-control form-control-sm" type="text" name="name" placeholder="team name">
    <input class="form-control form-control-sm" type="text" name="race" placeholder="race">
    <input class="form-control form-control-sm" type="integer" name="reroll" placeholder="re-rolls">   
    <input class="form-control form-control-sm" type="integer" name="rerollValue" placeholder="re-roll cost">  
    <input class="form-control form-control-sm" type="integer" name="fanfactor" placeholder="fanfactor">  
    <input class="form-control form-control-sm" type="integer" name="assistantCoach" placeholder="assistant Coaches">  
    <input class="form-control form-control-sm" type="integer" name="cheerleader" placeholder="cherleaders">  
    <input class="form-control form-control-sm" type="integer" name="apothecary" placeholder="apothecary">  
    <input class="form-control form-control-sm" type="integer" name="teamValue" placeholder="team Value">  
    <button type="submit" class="btn btn-primary">save</button>
    
</form>


 


@endsection
