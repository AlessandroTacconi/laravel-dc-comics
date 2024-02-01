@extends('layouts.app')
<body>
 
@section('main')
        <div class="container">
            <h2>Il mio main</h2>
            {{-- <img src="{{ Vite::asset('resources/img/praia.jpg') }}" alt=""> --}}
            <a href="{{ Route('comics.index') }}">via</a>
        </div>
@endsection
</body>
</html>