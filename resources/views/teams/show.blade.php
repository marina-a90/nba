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


<h4>Comments:</h4>

@foreach($team->comments as $comment)
    <ul>
        <li>
            <strong>{{ $comment->user->name }} says:</strong>
            <p>{{ $comment->content }}</p>
        </li>
    </ul>
@endforeach