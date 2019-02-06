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

@foreach ($team->players as $player)
<tr>

<td>{{$player->playernr}}</td>
<td><form method="POST" action="/player/{{$player->id}}">
    @method('PATCH')
    @csrf   
    <input class="form-control form-control-sm" type="text" name="name" placeholder="" value="{{$player->name}}">
    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
</form>
</td>
<td><form method="POST" action="/player/{{$player->id}}">
    @method('PATCH')
    @csrf   
    <input class="form-control form-control-sm" type="text" name="position" placeholder="" value="{{$player->position}}">
    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
    </form>
</td>
<td><input class="form-control form-control-sm" type="integer" name="move" placeholder="" value="{{$player->move}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="strength" placeholder="" value="{{$player->strength}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="agility" placeholder="" value="{{$player->agility}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="armour" placeholder="" value="{{$player->armour}}"></td>
<td><input class="form-control form-control-sm" type="text" name="skills" placeholder="" value="{{$player->skills}}">
    ,<input class="form-control form-control-sm" type="text" name="extraSkillA" placeholder="" value="{{$player->extraSkillA}}"> 
    ,<input class="form-control form-control-sm" type="text" name="extraSkillB" placeholder="" value="{{$player->extraSkillB}}">
    ,<input class="form-control form-control-sm" type="text" name="extraSkillC" placeholder="" value="{{$player->extraSkillC}}">
    ,<input class="form-control form-control-sm" type="text" name="extraSkillD" placeholder="" value="{{$player->extraSkillD}}">
    ,<input class="form-control form-control-sm" type="text" name="extraSkillE" placeholder="" value="{{$player->extraSkillE}}">
    ,<input class="form-control form-control-sm" type="text" name="extraSkillF" placeholder="" value="{{$player->extraSkillF}}">
</td>
<td><input type="checkbox" name="$player->missingNextGame" value="{{$player->missingNextGame}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="niglingInjury" placeholder="" value="{{$player->niglingInjury}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="completions" placeholder="" value="{{$player->completions}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="touchdown" placeholder="" value="{{$player->touchdown}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="intercept" placeholder="" value="{{$player->intercept}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="casualtie" placeholder="" value="{{$player->casualtie}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="mvp" placeholder="" value="{{$player->mvp}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="spp" placeholder="" value="{{$player->spp}}"></td>
<td><input class="form-control form-control-sm" type="integer" name="cost" placeholder="" value="{{$player->cost}}"></td>
<td>
    <form method="POST" action="/player/{{$player->id}}">
        @method('PATCH')
        @csrf   
    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
    </form>
</td>
{{-- functie verzamel alle bovenstaande velden en update deze --}}



</tr>
@endforeach



@endsection

{{-- <td>   <form method="POST" action="/player/{{$player->id}}">
@method('DELETE')
@csrf
<button type="submit"><i class="far fa-trash-alt"></i></button> 
</form>
</td> --}}