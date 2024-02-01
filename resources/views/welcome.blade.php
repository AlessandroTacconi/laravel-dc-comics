<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Il mio Tamplate Laravel</title>
    @vite('resources/js/app.js')
</head>
<body>
 
    <header>
        <div class="container">
            <h1>Il mio Tamplate Laravel</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Il mio main</h2>
            <img src="{{ Vite::asset('resources/img/praia.jpg') }}" alt="">
        </div>
    </main>
    <Footer>
        <div class="container">
            Il mio footer
        </div>
    </Footer>
</body>
</html>