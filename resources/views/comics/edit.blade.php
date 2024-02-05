@extends('template')

@section('main')
  <h1>Modifica fumetto</h1>
 <p><a href="{{route('comics.index')}}">pagina home</a></p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <form action="{{ route('comics.update',$comic->id)}}" method="POST">
    @csrf

    

    @method('PUT')
    <div>
       <label for="title">Titolo</label>
       
        <input type="text" name="title" id="title" value="{{ old('title',$comic->title) }}" required>
    </div>
   
    <div>
        <label for="description">Descrizione</label>
        
        <input type="text" name="description" id="description" value="{{old('description',$comic->description) }}" nullable>
    </div>

    <div>
        <label for="thumb">immagine</label>
        <input type="text" name="thumb" id="thumb" value="{{ old('thumb',$comic->thumb) }}" nullable>
    </div>

    <div>
        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price" value="{{ old('price',$comic->price) }}" nullable>
    </div>

    <div>
        <label for="series">Serie</label>
        <input type="text" name="series" id="series" value="{{ old('series',$comic->series) }}" nullable>
    </div>

    
    <div>
        <label for="sale_date">Data di vendita</label>
        <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date',$comic->sale_date) }}" nullable>
    </div>

    <div>
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type" value="{{ old('type',$comic->type) }}" nullable>
    </div>
    
    <br>
      
    <button>Aggiungi</button>
    
   
    
  </form>
@endsection

