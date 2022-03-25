<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         
        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">

        <!-- Scripts -->
        <script src="/js/script.js"></script>

    </head>
    <body>
    
        <div class="my-container-nave-bar mb-4">
            <nav class="navbar navbar-expand-lg navbar-light ms-5 me-5" >
                <div class="container-fluid">
                    <img src="/img/icone.png" alt="" class="me-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/quero-adotar">Quero adotar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/quero-ajudar">Quero ajudar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Sobre nós</a>
                        </li>
                    </ul>
                    <div class = "d-flex">
                        <a class = "me-2 my-nav-link p-2" href="/entrar">Entrar</a>
                        <a href="/cadastre-se" class="my-btn">Cadastre-se</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="ms-5 me-5">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @if(session('msg'))
                            <p class="msg">{{session('msg')}}</p>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        
        <footer class="d-flex flex-wrap justify-content-center align-items-center py-3  border-top">
            
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                </a>
                <span class="text-muted">&copy; 2021 Adote Dog, Inc</span>
            </div>

            <div class="col-md-6 d-flex align-items-center">
                <ul class="list-inline mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <li class="list-inline-item">
                        <a class="foot-link" href="/">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="foot-link" href="/quero-adotar">Quero adotar</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="foot-link" href="/quero-ajudar">Quero ajudar</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="foot-link" href="/blog">Blog</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="foot-link" href="/blog">Sobre nós</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/cadastre-se" class="my-btn">Cadastre-se</a>
                    </li>
                </ul>
            </div>

        </footer>

    </body>
</html>
