<h1>My News:</h1>

<ul>
@foreach($news->user as $new)
    <li>   
        <a href="/news/{{ $new->id }}">  
            <h3>{{ $new->title }}</h3>
        </a>
        <div>Created at {{ $new->created_at }}</div>
        <br>
    </li>
@endforeach
</ul>