<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PetDevShop - O petshop do dev</title>
        <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}" />
        <link rel="icon" type="image/png" href="/images/favicon.png" />
    </head>
<body>
    <header>
        <div class="container">
            <a href="/">PetDevShop</a>
            
            <form method="GET" action="/search">
                <input type="search" name="search" placeholder="Pesquise por raça" value="" />
            </form>
            
            @auth
                <a class="login" href="/dashboar">Minhas adoções</a>
              
                <form action="/logout" method="POST">
                  @csrf
                  <a class="login" href="/logout"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Sair
                  </a>
                </form>
            @endauth


            @guest
                <div>
                    <a class="login" href="/login">Entrar</a>
                    <a class="register" href="/register">Registrar</a>
                </div>
            @endguest

        </div>
    </header>
    <nav>
        <ul>
            <li class=""><a href="/">Todos</a></li>
            <li class=""><a href="/dogs">Cachorros</a></li>
            <li class=""><a href="/cats">Gatos</a></li>
            <li class=""><a href="/fishes">Peixes</a></li>
        </ul>
    </nav>
    @yield('content')
<footer class="container">
    Feito com ❤ por Silvan Moura
</footer>
</body>
</html>