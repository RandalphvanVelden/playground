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
<td>{{$player->playernr}}</td>
<td>{{$player->name}}</td>
<td>{{$player->position}}</td>
<td>{{$player->move}}</td>
<td>{{$player->strength}}</td>
<td>{{$player->agility}}</td>
<td>{{$player->armour}}</td>
<td>{{$player->skills}},{{$player->extraSkillA}}, {{$player->extraSkillB}}, {{$player->extraSkillC}}, {{$player->extraSkillD}} {{$player->extraSkillE}} {{$player->extraSkillF}}</td>  
<td>{{$player->missingNextGame}}</td>
<td>{{$player->niglingInjury}}</td>
<td>{{$player->completions}}</td>
<td>{{$player->touchdown}}</td>
<td>{{$player->intercept}}</td>
<td>{{$player->casualtie}}</td>
<td>{{$player->mvp}}</td>
<td>{{$player->spp}}</td>
<td>{{$player->cost}}</td>
<td><a href="/player/{{$player->id}}/edit"><i class="fas fa-edit"></i></a></td>
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