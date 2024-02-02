@extends('layouts.app')
<body>
@section('main')

<h3><p class="card-text"><a href="{{ Route('comics.create') }}">Crea un fumetto</a></p></h3>
 
<div class="row">
@foreach ($comics as $comic)

<div class="col-4 g-5">
<div class="card" style="width: 18rem;">
  <img src="{{ $comic->thumb }}" class="card-img-top" alt="fumetto n. {{ $comic->id }}">
  <div class="card-body">
    <h5 class="card-title">{{ $comic->title }}</h5>
    <p class="card-text">{{ $comic->price }}</p>
    {{-- <p class="card-text">{{ $comic_item->id }}</p> --}}
    <p class="card-text"><a href="{{ Route('comics.show', $comic->id) }}">Dettagli</a></p>

  </div>
</div>


</div>


@endforeach
</div>




@endsection
</body>
</html>