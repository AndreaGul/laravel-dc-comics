@extends('template')

@section('main')
  <h1>pagina create</h1>
 
  <form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <label >incia del testo</label>
    <input type="text">
    <button>button</button>
    
  </form>
@endsection

