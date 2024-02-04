@extends('template')

@section('main')
    <h1>sei nell'index</h1>

    <ul>    
    @foreach ($comics as $comic)
         <li>{{ $comic['title'] }} <a href="{{route('comics.show',$comic['id'])}}">info</a>  <a href="{{route('comics.edit',$comic['id'])}}">modifica</a> </li>
        
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Cancella</button>
        </form>
    @endforeach
    </ul>
    
    <button><a href="{{route('comics.create')}}">Aggiungi</a></button>
    <p><a href="{{route('home')}}">pagina home</a></p>
    
@endsection
