@extends('layouts.app')
@extends('layouts.layout')

@section('content')

<h1> {{$team->name}}</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th>nr</th>
            <th>name</th>
            <th>position</th>
            <th>MA</th>
            <th>ST</th>
            <th>AG</th>
            <th>AV</th>
            <th>Skills</th>
            <th></th>
            <th>Miss Next Match</th>
            <th>Niggling Injuries</th>
            <th>Comp</th>
            <th>TD</th>
            <th>Int</th>
            <th>Cas</th>
            <th>MVP</th>
            <th>SPP</th>
            <th>Total Cost</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($team->players as $player)
            <tr>
                <td><a href="/player/{{$player->id}}/edit"><i class="fas fa-edit"></i></a></td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit"><i class="far fa-trash-alt"></i></button> 
                    </form>
                </td>
                <td>{{$player->playernr}}</td>
                <td>{{$player->name}}</td>
                <td>{{$player->position}}</td>
                <td>{{$player->move}}</td>
                <td>{{$player->strength}}</td>
                <td>{{$player->agility}}</td>
                <td>{{$player->armour}}</td>
                <td>{{$player->skills}}, {{$player->extraSkillA}}, {{$player->extraSkillB}}, {{$player->extraSkillC}}, {{$player->extraSkillD}}, 
                    {{$player->extraSkillE}}, {{$player->extraSkillF}} </td>
                <td><a href="/player/{{$player->id}}/skill">add skill</a></td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/missingNextGame">@method('PATCH') @csrf 
                    <label class="checkbox" $for="missingNextGame">
                        <input type="checkbox" name="missingNextGame" {{$player->missingNextGame ? 'checked' : ''}} onChange="this.form.submit()">  
                    </label>
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/niggling">@method('PATCH') @csrf 
                        <input type="number" name="niglingInjury" value="{{$player->niglingInjury}}"  onChange="this.form.submit()">  
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/completion">@method('PATCH') @csrf 
                        <input type="number" name="completions" value="{{$player->completions}}"  onChange="this.form.submit()">  
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/touchdown">@method('PATCH') @csrf 
                        <input type="number" name="touchdown" value="{{$player->touchdown}}"  onChange="this.form.submit()">  
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/intercept">@method('PATCH') @csrf 
                        <input type="number" name="intercept" value="{{$player->intercept}}"  onChange="this.form.submit()">  
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/casualtie">@method('PATCH') @csrf 
                        <input type="number" name="casualtie" value="{{$player->casualtie}}"  onChange="this.form.submit()">  
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/mvp">@method('PATCH') @csrf 
                        <input type="number" name="mvp" value="{{$player->mvp}}"  onChange="this.form.submit()">  
                    </form>
                </td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}/spp">@method('PATCH') @csrf 
                        <input type="number" name="ssp" value="{{$player->ssp}}"  onChange="this.form.submit()">  
                    </form>   
                </td>
                <td>{{$player->cost}}</td>
                <td>
                    <form method="POST" action="/player/{{$player->id}}">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



{{-- 
<form method="POST" action="/player/{{$player->id}}"> @method('PATCH') @csrf 
    <input type="text" name="playernr" placeholder="" value="">
    <input type="text" name="name" placeholder="" value="{{$player->name}}">
    <input type="text" name="position" placeholder="" value="">
    <input type="integer" name="move" placeholder="" value="">
    <input type="integer" name="strength" placeholder="" value="">
    <input type="integer" name="agility" placeholder="" value="">
    <input type="integer" name="armour" placeholder="" value="">
    <input type="text" name="skills" placeholder="" value="">
    <input type="text" name="extraSkillA" placeholder="" value=""> 
    <input type="text" name="extraSkillB" placeholder="" value="">
    <input type="text" name="extraSkillC" placeholder="" value="">
    <input type="text" name="extraSkillD" placeholder="" value="">
    <input type="text" name="extraSkillE" placeholder="" value="">
    <input type="text" name="extraSkillF" placeholder="" value="">
    
    <input type="integer" name="niglingInjury" placeholder="" value="">
    <input type="integer" name="completions" placeholder="" value="">
    <input type="integer" name="touchdown" placeholder="" value="">
    <input type="integer" name="intercept" placeholder="" value="">
    <input type="integer" name="casualtie" placeholder="" value="">
    <input type="integer" name="mvp" placeholder="" value="">
    <input type="integer" name="spp" placeholder="" value="">
    <input type="integer" name="cost" placeholder="" value="">
    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
</form>
--}}




@endsection

