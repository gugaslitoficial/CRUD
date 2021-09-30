<!DOCTYPE HTML>
<html>
<? php include("head.php")?>
<corpo>
    <? php include("menu.php") ?>
    <? php require_once("../controller/ControllerEditar.php");?>
    <div class = "row">
        <form method = "post" action = "../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form);return false; "class="col-10 ">
            <div class = "form-group">
                <input class = "form-control" type = "text" id = "nome" name = "nome" value = "<? php echo $ editar -> getNome();?>" autofoco obrigatório>
                <input class = "form-control" type = "text" id = "autor" name = "autor" value ="<? php echo $ editar -> getAutor();?>" obrigatório>
                <input class = "form-control" type = "number" id = "quantidade" name = "quantidade" value ="<? php echo $ editar -> getQuantidade();?>"obrigatório>
                <input class = "form-control" type = "number" id = "preco" name = "preco" value = "<? php echo $ editar -> getPreco();?>" obrigatório>
                <select name = "flag">
                    <? php $ c = $ editar -> getFlag();?>
                    <option value = "<? php echo $ editar -> getFlag();?>"><? php echo ($ editar -> getFlag() == 0)? "Desativado" : "Ativado"?></Option>
                    <option value = "<? php echo ($ c == 0 )?" 1 " : " 0 "?>"><? php echo ($ editar -> getFlag()! = 0 )? "Desativado" : "Ativado"?></Option>
                </select>
                <input class = "form-control" type = "date" id = "data" name = "data" value ="<? php echo $ editar -> getData();?>" obrigatório>
            </div>
            <div class = "form-group">
                <input type = "hidden" name = "id" value ="<? php echo $ editar -> getNome();?>">
                <button type = "enviar" class = "btn btn-success" id = "editar" name = "enviar" value = "editar">Editar</button>
            </div>
        </form>
    </div>
      <script language = "javascript" type = "text/javascript">
        function formatarMoeda(){
            var elemento = documento.getElementById('preco');
            var valor = preco.valor;
            valor = valor  +  '' ;
            valor = parseInt(valor.substituir(/[\D] + /g, '' ));
            valor = valor +  '';
            valor = valor.substituir(/([0-9]{2})$/g , ", $ 1");
            if(valor.comprimento>6){
                valor = valor.substituir(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$ 2");
            }
            elemento.valor = valor;
        }
        function validar(formulario) {
            var quantidade = formulário.quantidade.valor;
            var preco = form.preco.valor;
            para(i = 0; i <= formulario.comprimento - 2 ; i ++ ) {
                if((formulario[i].value == "")){
                    alerta("Preencha o campo" + formulario[i].nome);
                    formulario[i].foco();
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