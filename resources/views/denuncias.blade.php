<!DOCTYPE html>
<html>
    <body>
        <form method="get" action="{{route('denuncia.create')}}">
        imagem<input type="text" name="nm_imagem">
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
    </body>
</html>