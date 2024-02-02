@extends('layouts.app')
<body>
@section('main')

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>modifica pasta: {{ $comic->title }}</h3>
            <div class="mb-3">
                <label class="form-label">title</label>
                <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <p class="card-text"><a href="{{ Route('comics.index', $comic->id) }}">Torna alla lista</a></p>
@endsection
</body>
</html>