@extends('layouts.app')
<body>
@section('main')

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>modifica fumetto: {{ $comic->title }}</h3>
            <div class="mb-3">
                <label class="form-label">title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title'), $comic->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price'), $comic->price }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" name="description" value="{{ old('description'), $comic->description }}">
            </div>
            <div class="mb-3">
                <label class="form-label">thumb</label>
                <input type="text" class="form-control" name="thumb" value="{{ old('thumb'), $comic->thumb }}">
            </div>
            <button type="submit" class="btn btn-primary">modifica</button>
        </form>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
          @csrf


          @method('DELETE')
            <input class="btn btn-danger" type="submit" value="cancella">
    <p class="card-text"><a href="{{ Route('comics.index', $comic->id) }}">Torna alla lista</a></p>
@endsection
</body>
</html>