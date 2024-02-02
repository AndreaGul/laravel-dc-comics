@extends('template')


@section('main')
   <h1>pagina show</h1>
  {{-- <p>{{ $comic->id }}</p> --}}
  <p><a href="{{route('comics.index')}}">pagin index</a> </p>
  <p><a href="{{route('comics.create')}}">pagina create</a> </p>
  
@endsection
