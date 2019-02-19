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


<h4>Add a comment:</h4>
    <form method="POST" action="/teams/{{ $team->id }}/comments">
        @csrf

        <textarea type="text" name="content" rows="10" columns="40" placeholder="Comment"
        class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}">{{ old('content') }}</textarea>

        @include('partials.invalid-feedback', ['field' => 'content'])
        
        <button type="submit">Submit Comment</button>
</form>

{{-- <div class="alert alert-danger" role="alert">
    </div> --}}