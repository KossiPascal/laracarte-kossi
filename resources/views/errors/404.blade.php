@extends('errors::layout')

@section('title', 'Page non Trouvé')


@section('message')
<h1>404</h1>
<h3>Désolé! Page Non Trouvé</h3>
<p><a href="{{ route('root_path') }}">Allez à la Page d'acceuil</a></p>
@stop
