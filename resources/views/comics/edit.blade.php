@extends('template')

@section('main')
  <h1>Modifica fumetto</h1>
 <p><a href="{{route('comics.index')}}">pagina home</a></p>
  <form action="{{ route('comics.update',$comic->id)}}" method="POST">
    @csrf

    @method('PUT')
    <div>
       <label for="title">Titolo</label>
       
        <input type="text" name="title" id="title" value="{{ $comic->title }}">
    </div>
   
    <div>
        <label for="description">Descrizione</label>
        
        <input type="text" name="description" id="description" value="{{ $comic->description }}">
    </div>

    <div>
        <label for="thumb">immagine</label>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}">
    </div>

    <div>
        <label for="series">Serie</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">
    </div>

    
    <div>
        <label for="sale_date">Data di vendita</label>
        <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
    </div>

    <div>
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}">
    </div>
    
    <br>
      
    <button>Aggiungi</button>
    
   
    
  </form>
@endsection

