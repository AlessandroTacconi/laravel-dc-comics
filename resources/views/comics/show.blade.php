@extends('layouts.app')
<body>
@section('main')




<div class="card" style="width: 18rem;">
  <img src="{{ $comic->thumb }}" class="card-img-top" alt="fumetto n. {{ $comic->id }}">
  <div class="card-body">
    <h5 class="card-title">{{ $comic->title }}</h5>
    <p class="card-text">{{ $comic->price }}</p>
    {{-- <p class="card-text">{{ $comic_item->id }}</p> --}}
    <p class="card-text"><a href="{{ Route('comics.index', $comic->id) }}">Torna alla lista</a></p>
</div>









@endsection
</body>
</html>