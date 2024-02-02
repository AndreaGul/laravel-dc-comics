@extends('template')

@section('main')
    <h1>sei nell'index</h1>
    <p><a href="{{route('comics.show',1)}}">pagina show</a></p>
    <p><a href="{{route('home')}}">pagina home</a></p>
    
@endsection
