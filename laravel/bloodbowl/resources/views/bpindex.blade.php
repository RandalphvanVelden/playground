@extends('layouts.app')
@extends('layouts.layout')

@section('content')

        <table class="table table-striped">
                <thead>
                    <tr>
                      <th>team</th>
                      <th>position</th>
                      <th>cost</th>
                      <th>quantity</th>
                      <th>move</th>
                      <th>strength</th>
                      <th>agility</th>
                      <th>armour</th>
                      <th>skills</th>
                      <th>skills choice</th>
                      <th>skills double</th>
                    </tr>
            </thead>
            <tbody>
    @foreach($basicplayers as $basicplayer)
    <tr>
    <td>{{$basicplayer->team}}</td>
    <td>{{$basicplayer->position}}</td>
    <td>{{$basicplayer->cost}}</td>
    <td>{{$basicplayer->qty}}</td>
    <td>{{$basicplayer->move}}</td>
    <td>{{$basicplayer->strength}}</td>
    <td>{{$basicplayer->agility}}</td>
    <td>{{$basicplayer->armour}}</td>
    <td>{{$basicplayer->skills}}</td>
    <td>{{$basicplayer->skillChoiceSingleA}} {{$basicplayer->skillChoiceSingleB}} {{$basicplayer->skillChoiceSingleC}}</td>
    <td>{{$basicplayer->skillChoiceDoubleA}} {{$basicplayer->skillChoiceDoubleB}} {{$basicplayer->skillChoiceDoubleC}}</td>  
<td><a href="/basicplayer/{{$basicplayer->id}}/edit"><i class="fas fa-edit"></i></a></td>
<td>   <form method="POST" action="/basicplayer/{{$basicplayer->id}}">
        @method('DELETE')
        @csrf
    <button type="submit"><i class="far fa-trash-alt"></i></button> 
    </form>
</td>
</tr>
    @endforeach
</tbody>
</table> 
<a href="/basicplayer/create" type="button" class="btn btn-primary">Create Player</a>
@endsection


