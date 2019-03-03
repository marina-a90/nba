<h1>News:</h1>

<ul>
@foreach($news as $new)
    <li>   
        <a href="/news/{{ $new->id }}">  
            <h3>{{ $new->title }}</h3>
        </a>
        <div>Created at {{ $new->created_at }}</div>
        <div>Created by {{ $new->user->name }}</div>
        <br>
    </li>
@endforeach
</ul>


<div>
    {{ $news->links() }}
</div>