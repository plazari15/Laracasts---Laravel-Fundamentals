@extends('app')

@section('content')

    <h1>Write a new Article</h1>

    {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Name:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Add Article', ['class' => 'btn btn-success form-control']) !!}
    {!! Form::close() !!}
@stop