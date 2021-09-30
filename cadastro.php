<!DOCTYPE HTML>
<html>
<? php include("head.php")?>
<corpo>
    <? php include("menu.php")?>
    <div class = "row">
        <form method = "post" action = "../controller/ControllerCadastro.php" id = "form" name = "form" onsubmit = "validar(document.form); return false;" class = "col-10">
            <div class = "form-group">
                <input class = "form-control" type = "text" id = "nome" name = "nome" placeholder = "Nome do Livro" autofoco obrigatório>
                <input class = "form-control" type = "text" id = "autor" name = "autor" placeholder = "Autor do Livro" obrigatório>
                <input class = "form-control" type = "number" id = "quantidade" name = "quantidade" placeholder = "Quantidade de Páginas" necessária>
                <input class = "form-control" type = "text" id = "preco" name = "preco" placeholder = "Preço do Livro" onkeypress = " formatarMoeda();" obrigatório>
                <input class = "form-control" type = "date" id = "data" name = "data" placeholder = "Data de Pulicação" obrigatório>
            </div>
            <div class = "form-group">
                <button type = "submit" class = "btn btn-success" id = "cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
    <script language = "javascript" type = "text/javascript">
        function formatarMoeda(){
            var elemento = documento.getElementById('preco');
            var valor = preco.valor;
            valor = valor + '';
            valor = parseInt(valor.substituir(/[\D] + /g, ''));
            valor = valor + '';
            valor = valor.substituir (/([0-9]{2}) $ /g, ", $ 1");
            if (valor.comprimento>6){
                valor = valor.substituir(/([0-9]{3}),([0-9]{2}$)/g, ". $ 1, $ 2");
            }
            elemento.valor = valor;
        }
        function validar(formulario){
            var quantidade = formulário.quantidade.valor;
            var preco = form.preco.valor;
            para (i = 0; i <= formulario.comprimento - 2; i++){
                if((formulario[ i ].value == "")){
                    alerta("Preencha o campo" + formulario[ i ].nome);
                    formulario[ i ].foco();
                    return false;
                }
            }
            if(quantidade <= 0){
                alert('A quantidade de páginas não pode ser igual ou inferior a 0');
                formulário.quantidade.foco();
                return false;
            }
            if(preco <= 0){
                alert('O preço do livro não pode ser igual ou infeiror a 0');
                formulário.preco.foco();
                return false;
            }
            formulario.submit();
        }
    </script>
</body>
</html>