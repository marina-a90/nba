<h1>Igrac:</h1>

<h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
<div>Email: {{ $player->email }}</div>
<div>Team: 
    <a href="/teams/{{ $player->team->id }}">  
        {{ $player->team->name }}
    </a>
</div>