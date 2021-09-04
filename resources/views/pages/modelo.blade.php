<html>
    <head>
        <title> </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="http://localhost/site1/public/style.css" >
</head>

<body> 
 
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Carousel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link {{ (Route::current()->getName() === 'pages.home' ? 'active':'') }}" aria-current="page" href="{{route('pages.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::current()->getName() === 'pages.structure' ? 'active':'') }}" aria-current="page" href="{{route('pages.structure')}}">Estrutura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::current()->getName() === 'pages.product' ? 'active':'') }}" aria-current="page" href="{{route('pages.product')}}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::current()->getName() === 'pages.contact' ? 'active':'') }}" aria-current="page" href="{{route('pages.contact')}}">Contatos</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
      
      <main>
      
        @yield('content')
      
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>
      


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



</body>
</html>