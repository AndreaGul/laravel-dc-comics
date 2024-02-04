@extends('template')

@section('main')
    <h1>sei nell'index</h1>

    <ul>    
    @foreach ($comics as $comic)
         <li>{{ $comic['title'] }} <a href="{{route('comics.show',$comic['id'])}}">info</a></li>
         
    @endforeach
    </ul>
    
    <button><a href="{{route('comics.create')}}">Aggiungi</a></button>
    <p><a href="{{route('home')}}">pagina home</a></p>
    
@endsection
