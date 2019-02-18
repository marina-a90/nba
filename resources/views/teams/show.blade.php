<h1>{{ $team->name }}</h1>
<div>Email: {{ $team->email }}</div>
<div>Adress: {{ $team->adress }}</div>
<div>City: {{ $team->city }}</div>

<h3>{{ $team->name }} players:</h3>

@foreach($team->players as $player)
<ul>
    <li>
        <a href="/players/{{ $player->id }}">
            {{ $player->first_name }} {{ $player->last_name }} 
        </a>
    </li>
</ul>
@endforeach