@extends('index')

@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12">
        <span class="h1 mb-1 mt-1 float-left">Cadastrar denuncia</span>
        </div>
    </div>

    <div class="row justify-content-center mb-5 card py-5">
        <div class="col-sm-12">
            <form method="post" action="{{route('create')}}" enctype="multipart/form-data">
            	@csrf
                
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="rua" class="font-weight-bold">Rua</label>
                        <input name="rua" type="text" class="form-control" id="Rua" placeholder="Nome da rua" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="numero" class="font-weight-bold">Número</label>
                        <input name="numero" type="text" class="form-control" id="numero" placeholder="Número" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="bairro" class="font-weight-bold">Bairro</label>
                        <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Nome do Bairro" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="cidade" class="font-weight-bold">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Nome da Cidade" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="descricao" class="font-weight-bold">Descrição</label>
                        <textarea name="descricao" class="form-control" maxlength="500" id="descricao" placeholder="Descrição do problema" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="obs" class="font-weight-bold">Observação</label>
                        <textarea name="observacao" class="form-control" maxlength="500" id="obs" placeholder="Observações"></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                	<label for="imagem" class="font-weight-bold">Imagem</label>
                        <input name="nm_imagem" type="file" class="form-control" id="imagem">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <button class="btn btn-success" type="submit">Cadastrar</button>
                        <button class="btn btn-danger" type="button">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

      </div>

@endsection