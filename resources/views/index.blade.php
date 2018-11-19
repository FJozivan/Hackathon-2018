<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-app.css') }}" rel="stylesheet">

    <title>System</title>
  </head>
  <body>    
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
          
        
        <footer class="foot page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3 text-justify texto">

              <!-- Content -->
              <h5 class="text-uppercase" style="color: #ffffff"><b>Descrição:</b></h5>
              <p>Aplicativo que facilita a integração entre enel e cliente, a fim de haver uma cooperação simultânea, o app consiste em um canal onde o usuário pode se informar a respeito das normas que a enel dispõe e também poderá fazer denúncias que serão direcionadas a enel, depois de aprender com tutoriais interativos como identificar algumas das irregularidades, apresentando as normas disponibilizadas pela Enel de forma intuitiva.. </p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase" style="color: #ffffff"><b>Equipe</b></h5>

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
                    <p >Deeved Hiuston</p>
                  </li>
                  <li>
                    <p >Alberto Júnior</p>
                  </li>

                </ul>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase" style="color: #ffffff"><b>Contatos</b></h5>

                <ul class="list-unstyled texto">
                  <li>
                    <p>lucasseduhh@gmail</p>
                  </li>
                  <li>
                    <p>josivamfreire.fj@gmail.com</p>
                  </li>
                  <li>
                    <p>raphaeloliveira59@gmail.com</p>
                  </li>
                  <li>
                    <p>deeved@gmail.com</p>
                  </li>
                  <li>
                    <p>alberto@gmail.com</p>
                  </li>

                </ul>

              </div>
              <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
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