<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-ark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="/eleve">Eleves</a>
                        <a class="nav-link active" href="/batiment">Batiments</a>
                        <a class="nav-link active" href="/formation">Formations</a>
                        <a class="nav-link active" href="/typeformation">Types de formation</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('main')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
