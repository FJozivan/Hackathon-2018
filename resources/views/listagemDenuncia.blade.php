@extends('index')

@section('content')

<div class="container">
          <div class="row mt-4">
            <div class="col-sm-12">
              <span class="h1 mb-1 mt-1 float-left">Setores</span>
            </div>
          </div>
          <div class="row justify-content-center mb-1 mt-1">
            <div class="col-sm-12">
              <form>
                <div class="form-row">
                  <div class="form-group col-sm-3">
                    <select class="custom-select">
					  <option selected>Selecione a região</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>   
                  </div>
                  <div class="form-group col-sm-3">
                    <select class="custom-select">
					  <option selected>Selecione a cidade</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>   
                  </div>
                  <div class="form-group col-sm-3">
                    <select class="custom-select">
					  <option selected>Selecione o estado</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>   
                  </div>	



                  <div class="form-group col-sm-2">
                    <button class="btn btn-dark float-right" type="submit">Buscar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>



          <div class="row">
            <div class="col-sm-12">
              <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Rua</th>
                  <th scope="col">Bairro</th>
                  <th scope="col">Cidade</th>
                  <th scope="col">Problema apresentado</th>
                  <th scope="col">Detalhamento do problema</th>
                </tr>
              </thead>
              <tbody>
              @foreach($denuncia as $denuncias)
                <tr>
                  <th scope="row">{{$denuncias->rua}}</th>
                  <td>{{$denuncias->bairro}}</td>
                  <td>{{$denuncias->cidade}}</td>
                  <td>{{$denuncias->descricao}}</td>
                  <td>{{$denuncias->observacao}}</td>
                </tr>
              @endforeach  
              </tbody>
            </table>
              
            </div>

          </div>
          
        </div>

@endsection