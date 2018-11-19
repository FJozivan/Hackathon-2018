<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-app.css') }}" rel="stylesheet">
    <style>
      .cards{
        box-shadow: 0px 0px 8px 1px gray;
      }
    </style>

    <title>System</title>
  </head>
  <body style="font-family: 'Open Sans', sans-serif;">    
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1d9aff;">
          <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">System</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
              </button>

                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('denuncia') }}">Início</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Área de Denuncias</a>
                        <div class="dropdown-menu"> 
                              <a class="dropdown-item" href="{{ route('cadDenuncia') }}">Denunciar</a>
                              <a class="dropdown-item" href="{{ route('listagemDenuncia') }}">Lista de Denuncias</a>
                          </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('aprendizagem') }}">Aprendizagem</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('pontos') }}">Sistema de Pontos</a>
                      </li>
                      
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">User01</a>
                          <div class="dropdown-menu"> 
                              <a class="dropdown-item" href="#">Perfil</a>
                              <a class="dropdown-item" href="#">Sair</a>
                              
                          </div>
                      </li>
                    </ul>
                 

                </div>

          </div>
        </nav><!--fim da navbar -->


        
        
          

         @yield('content') 
          
        
        <footer class="foot page-footer font-small pt-4">

        <br><br>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer_copyright footer-copyright text-center py-3 texto">© 2018 Copyright:
          <a href="https://www.eneldistribuicao.com.br/" style="color: #ffffff">Enel</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->
        
      



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    
  </body>
</html>