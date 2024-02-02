@extends('template')

@section('main')
  <h1>sei nello store</h1>
  <p>{{$data['title']}}</p>
  <a href="{{route('comics.create')}}"></a>
@endsection