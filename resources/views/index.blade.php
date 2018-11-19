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
              <a class="navbar-brand h1 mb-0" href="#">NIIRE</a>
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
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                 

                </div>

          </div>
        </nav><!--fim da navbar -->


        
        
          

         @yield('content') 
          
        
        <footer class="foot page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

              <!-- Content -->
              <h5 class="text-uppercase" style="color: #DCDCDC">Descrição:</h5>
              <p>Um sistema de reserva de materiais em conjunto com o rastreamento em tempo real dos objetos que podem ser deslocados, auxiliando os usuários (professores) na reserva e gerenciamento de recursos, evitando ainda a perda dos mesmos. </p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase" style="color: #DCDCDC">Equipe</h5>

                <ul class="list-unstyled texto">
                  <li>
                    <p >Lucas Eduardo</p>
                  </li>
                  <li>
                    <p >Jozivan Freire</p>
                  </li>
                  <li>
                    <p >Raphael Oliveira</p>
                  </li>
                  <li>
                    <p >Alberto Junior</p>
                  </li>
                  <li>
                    <p >Deeved Hiuston</p>
                  </li>

                </ul>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase" style="color: #DCDCDC">Contatos</h5>

                <ul class="list-unstyled texto">
                  <li>
                    <p>lucas@gmail.com</p>
                  </li>
                  <li>
                    <p>josivan@gmail.com</p>
                  </li>
                  <li>
                    <p>raphael@gmail.com</p>
                  </li>
                  <li>
                    <p>alberto@gmail.com</p>
                  </li>
                  <li>
                    <p>deeved.n@gmail.com</p>
                  </li>

                </ul>

              </div>
              <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer_copyright footer-copyright text-center py-3">© 2018 Copyright:
          <a href="https://sites.google.com/site/laisifce/home">LaIS</a>
        </div>
        <!-- Copyright -->

      </footer>
        
      



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    
  </body>
</html>