@extends('template')


@section('main')

   <h1>{{ $comic->title}}</h1>
   <button><a href="{{route('comics.index')}}">indietro</a></button>
   
   <img src="{{ $comic->thumb}}" alt="">
   <p>{{ $comic->description}}</p>
   
 
  
@endsection
