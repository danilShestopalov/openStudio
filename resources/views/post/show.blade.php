@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <img src="/uploads/posts/{{ $post->image }}">
                <h2 class="blog-post-title">{{$post->title}}</h2>
                <p>{{$post->body}}</p>
            </div>
            <div>
                @foreach($comments as $comment)
                    <h3>{{ $comment->body }}</h3>
                @endforeach
                <form method="post" action="{{ route('comment.store', $post->id) }}">
                    @csrf
                    <textarea name="body"></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
