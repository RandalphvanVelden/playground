@extends('layouts.app');
@extends('layouts.layout');

@section('content')

<h1> {{$team->name}}</h1>

<table class="table table-striped">
        <thead>
            <tr>
                <th>nr</th>
                <th>name</th> 
                <th>position</th>
                <th>move</th>
                <th>strength</th>
                <th>agility</th>
                <th>armour</th>
                <th>skills</th>
                <th>miss next match</th>
                <th>nigling injury</th>
                <th>Compl</th>
                <th>TD</th>
                <th>Int</th>
                <th>Cas</th>
                <th>MVP</th>
                <th>spp</th>
                <th>total cost</th>
            </tr>
    </thead>
    <tbody>       
@if ($team->players->count())
@foreach ($team->players as $player)
<tr>
<form method="POST" action="/player/{{$player->id}}">
@method('PATCH')
@csrf   
<td>{{$player->playernr}}</td>
<td><input class="form-control form-control-sm" type="text" name="name" placeholder="" value="{{$player->name}}"></td>
<td><input class="form-control form-control-sm" type="text" name="position" placeholder="" value="{{$player->position}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="move" placeholder="" value="{{$player->move}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="strength" placeholder="" value="{{$player->strength}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="agility" placeholder="" value="{{$player->agility}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="armour" placeholder="" value="{{$player->armour}}"></td>
<td><input class="form-control form-control-sm" type="text" name="skills" placeholder="" value="{{$player->skills}}">
    ,{{$player->extraSkillA}}, {{$player->extraSkillB}}, {{$player->extraSkillC}}, {{$player->extraSkillD}} {{$player->extraSkillE}} {{$player->extraSkillF}}</td>
<td><input type="checkbox" name="$player->missingNextGame" value="{{$player->missingNextGame}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="niglingInjury" placeholder="" value="{{$player->niglingInjury}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="completions" placeholder="" value="{{$player->completions}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="touchdown" placeholder="" value="{{$player->touchdown}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="intercept" placeholder="" value="{{$player->intercept}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="casualtie" placeholder="" value="{{$player->casualtie}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="mvp" placeholder="" value="{{$player->mvp}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="spp" placeholder="" value="{{$player->spp}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="cost" placeholder="" value="{{$player->cost}}"></td>
<td><button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
</form>
<td>   <form method="POST" action="/player/{{$player->id}}">
@method('DELETE')
@csrf
<button type="submit"><i class="far fa-trash-alt"></i></button> 
</form>
</td>
</tr>
@endforeach
@endif 


@endsection

