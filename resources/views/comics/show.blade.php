@extends('layouts.app')
<body>
@section('main')




<div class="card" style="width: 18rem;">
  <img src="{{ $comic_item->thumb }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $comic_item->title }}</h5>
    <p class="card-text">{{ $comic_item->price }}</p>
    {{-- <p class="card-text">{{ $comic_item->id }}</p> --}}
    <p class="card-text"><a href="{{ Route('comics.index', $comic_item->id) }}">Torna alla lista</a></p>
</div>









@endsection
</body>
</html>