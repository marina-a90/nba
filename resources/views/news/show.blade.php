<h1>{{ $news->title }}</h1>
<div>Created at {{ $news->created_at }}</div>
<div>Created by {{ $news->user->name }}</div>
<div>{{ $news->content }}</div>