

{{-- @if ($team->player->count())
@foreach ($team->player as $player)
<li> {{$task->description}}</li>


@endforeach
@endif --}}
Help....
@foreach ($teams as $player)
<li> {{$player}}</li>


@endforeach