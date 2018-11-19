@extends('index')

@section('content')

<div class="jumbotron jumbotron-fluid"> <!--inicio jumbtron -->
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                  <h1 class="display-4"><i class="fas fa-medal"></i> Sistema de pontuação</h1>
                  <p class="lead">Realize as missões no site e denuncie irregularidades para ganhar pontos</p>
                  <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <ul class="nav nav-pills justify-content-center mb-4" id="pills-nav" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Denuncias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Missões</a>
                  </li>
                </ul>
                <div class="tab-content" id="nav-pills-content">
                  <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                      <div class="row">
                         <div class="col-sm-2">
                           <h1 class="display-4"><i class="fas fa-user-secret"></i></h1>
                         </div>
                         <div class="col-sm-10">
                              <p> humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the There are many variatio</p>
                           
                         </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                    <div class="row">
                         <div class="col-sm-2">
                         <h1 class="display-4"><i class="fas fa-user-secret"></i></h1>
                           
                         </div>
                         <div class="col-sm-10">
                              <p> humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the There are many variatio</p>
                           
                         </div>
                      </div>
                  </div>
                    
                </div>
                
              </div>
              
            </div>
            
          </div>
          
        </div> <!--fim jumbtron -->



@endsection