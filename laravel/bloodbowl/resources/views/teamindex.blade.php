@extends('layouts.app');
@extends('layouts.layout');

@section('content')

        <table class="table table-striped">
                <thead>
                    <tr>
                      <th>userid</th>
                      <th>name</th>
                      <th>race</th>
                      <th>value</th>
                    </tr>
            </thead>
            <tbody>
    @foreach($teams as $team)
    <tr>
    <td>{{$team->userId}}</td>   
    <td>{{$team->name}}</td>
    <td>{{$team->race}}</td>
    <td>{{$team->teamValue}}</td>
    
 <td><a href="/team/{{$team->id}}/edit"><i class="fas fa-edit"></i></a></td>
<td>   <form method="POST" action="/team/{{$team->id}}">
        @method('DELETE')
        @csrf
    <button type="submit"><i class="far fa-trash-alt"></i></button> 
     </form>
    </td>
    </tr>
        @endforeach
    </tbody>
    </table> 
    <a href="/team/create" type="button" class="btn btn-primary">Create team</a>
    @endsection
