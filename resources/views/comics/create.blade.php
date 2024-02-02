@extends('template')

@section('main')
  <h1>pagina create</h1>
 
  <form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <label for="title">incia del testo</label>
    <input type="text" name="title" id="title">
    <button>button</button>
    
  </form>
@endsection

