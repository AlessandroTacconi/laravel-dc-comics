@extends('layouts.app')
<body>
@section('main')


{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    
@endif --}}


  <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}">
            </div>            
            <div class="mb-3">
                <label class="form-label">thumb</label>
                <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection
</body>
</html>

