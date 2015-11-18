@extends('app')

@section('content')
    <h1>Articles</h1>

    <hr>

    @foreach($Articles as $Article)
        <article>
            <h2><a href="{{ action('ArticlesController@show', [$Article->id]) }}">{{$Article->title}}</a></h2>
            {{--<h2><a href="/articles/{{ $Article->id }}">{{$Article->title}}</a></h2>--}}
            <div class="body">{{$Article->body}}</div>
        </article>
    @endforeach
    @stop