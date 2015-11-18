@extends('app')

@section('content')

    <h1>{{ $Article->title }}</h1>

    <div>{{ $Article->body }}</div>
@stop
