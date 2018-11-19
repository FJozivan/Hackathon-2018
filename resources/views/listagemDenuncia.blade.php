@extends('index')

@section('content')

      <div class="container">
          <div class="row mt-4">
            <div class="col-sm-12">
              <span class="h1 mb-1 mt-1 float-left">Listagem de denuncias</span>
            </div>
          </div>
          <div class="row mt-2">
            <div class="form-group col-sm-10">
              <form method="get" action="{{route('pesquisarCidade')}}">
            
              <select class="custom-select" name="cidade" id="cidade">
                  <option selected>Selecione a cidade</option>
                  @foreach($cidades as $cidade)
                  <option value="{{$cidade->cidade}}">{{$cidade->cidade}}</option>
                @endforeach
              </select>   
              
              </div>
              <div class="form-group col-sm-2">
                <button class="btn btn-dark float-right" type="submit">Buscar</button>
              </div>
              </form>
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
</div>
@endsection