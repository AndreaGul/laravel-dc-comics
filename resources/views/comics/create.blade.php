<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>create</h1>
  <form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <label >incia del testo</label>
    <input type="text">
    <button>button</button>
  </form>
  
</body>
</html>