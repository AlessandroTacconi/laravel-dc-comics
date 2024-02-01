@extends('layouts.app')
<body>
@section('main')

  <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection
</body>
</html>