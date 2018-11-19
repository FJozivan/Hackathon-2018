<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="{{route('denuncia.create')}}" enctype="multipart/form-data">
        @csrf
        imagem<input type="file" name="nm_imagem">
        <br>
        descricao<input type="text" name="descricao">
        <br>
        observacao<input type="text" name="observacao">
        <br>
        rua<input type="text" name="rua">
        <br>
        numero<input type="text" name="numero">
        <br>
        bairro<input type="text" name="bairro">
        <br>
        cidade<input type="text" name="cidade">
        <br>
            <button type="submit">
                Enviar Denuncia
            </button>
        </form>

        <img class=" mb-3" src="{{url('storage/denuncias/'.session()->get('denuncia')[0]['img'])}}" class="img-fluid" style="margin:auto; width: 100px; border-radius: 100px; margin-top: 0px; box-shadow: 0px 0px 1px;width:125px;height: 125px" />
        <span>{{ session()->get('denuncia')[0]['img']}}</span>
    </body>
</html>