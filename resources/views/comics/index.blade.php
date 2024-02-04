@extends('template')

@section('main')
    <h1>sei nell'index</h1>

    <ul>    
    @foreach ($comics as $comic)
         <li>{{ $comic['title'] }} <a href="{{route('comics.show',$comic['id'])}}">info</a></li>
         
    @endforeach
    </ul>
    
    <p><a href="{{route('comics.create')}}">pagina create</a> </p>
    <p><a href="{{route('home')}}">pagina home</a></p>
    
@endsection
