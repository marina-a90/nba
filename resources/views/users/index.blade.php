<h1>List of news created by {{ $user->name }}</h1>

<ul>
@foreach($user->news as $news)
    <li>   
        <a href="/news/{{ $news->id }}">  
            <h3>{{ $news->title }}</h3>
        </a>
        <div>{{ $news->content }}</div>
    </li>
@endforeach
</ul>