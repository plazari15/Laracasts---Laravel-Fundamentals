@extends('app')

@if($nome == 'Caio')
    <h1>Ola caio, seu nome vem na frente!</h1>
    @else
<h1>Outra coisa</h1>
    @endif
@section('content')
    <h1>About Me: <?= $nome ?>, Idade: <?= $Idade ?></h1>
    <h1>About Me: {{ $nome }}, Idade: {{ $Idade }}</h1>
    <h1>About Me: {!! $nome !!}, Idade: {!! $Idade !!}</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat felis odio, vitae elementum mauris molestie nec. Donec quis rutrum lacus, ac egestas metus. Fusce a est diam. Integer laoreet tempus lectus, eu faucibus neque dignissim egestas. Vestibulum at urna id nunc efficitur dictum. Duis tempus vestibulum ante, vitae mattis eros consequat sed. Integer blandit semper odio, sed pulvinar metus mollis vel. Donec sit amet vestibulum nisl. Fusce lacus ante, laoreet a massa nec, mollis sagittis diam</p>
@stop