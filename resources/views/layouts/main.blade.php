<!DOCTYPE html>
<html lang="pt-br"> <!-- {{ str_replace('_', '-', app()->getLocale()) }} -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" c ontent="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do google -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collap navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                            <img src="/img/svg.png" class="imglogo" alt="">
                        </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Criar evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contato">Contato</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                           <form action="/logout" method="POST">
                               @csrf 
                               <a href="/logout"
                               class="nav-link"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        Sair</a>
                           </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Logar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Registrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>

        <main class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg"> {{ session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </main>
        
        <footer>
            <p>TENEBAAUM &copy; 2021 Allan Ostroski</p>
        </footer>
    </body>
</html>
