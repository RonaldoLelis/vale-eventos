<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Link Javascrip -->
    <script src="/js/script.js"></script>

    <!-- Link Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

</head>

<body class="antialiased">

    <div class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus Eventos</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                this.closest('form').submit();">Sair
                            </a>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg"> {{ session('msg') }} </p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>Vale-Eventos &copy; Lelis Designer 2023</p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>

</html>