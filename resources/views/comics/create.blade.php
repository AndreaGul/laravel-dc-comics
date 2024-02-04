@extends('template')

@section('main')
  <h1>Aggiungi fumetto</h1>
 <p><a href="{{route('comics.show',1)}}">pagina show</a></p>
  <form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <div>
       <label for="title">Titolo</label>
       
        <input type="text" name="title" id="title">
    </div>
   
    <div>
        <label for="description">Descrizione</label>
        
        <input type="text" name="description" id="description">
    </div>

    <div>
        <label for="thumb">immagine</label>
        <input type="text" name="thumb" id="thumb">
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price">
    </div>

    <div>
        <label for="series">Serie</label>
        <input type="text" name="series" id="series">
    </div>

    
    <div>
        <label for="sale_date">Data di vendita</label>
        <input type="text" name="sale_date" id="sale_date">
    </div>

    <div>
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type">
    </div>
    
    <br>
      
    <button>Aggiungi</button>
    
   
    
  </form>
@endsection

