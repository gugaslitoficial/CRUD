<? php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html >
<html lang = "pt-br">
<? php include("head.php");?>
<corpo>
   <? php include("menu.php");?>
    <table class = "table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Autor</th>
                <th>Quantidade de Páginas</th>
                <th>Preço</th>
                <th>Dados</th>
                <th>Bandeira</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <? php new listarController();?>
        </tbody>
    </mesa>
    <Roteiro src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"integridade =" SHA384-Q8i / X + 965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH + 8abtTE1Pi6jizo"crossorigin ="anonymous"></script de>
    <Roteiro src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integridade =" SHA384-ZMP7rVo3mIykV + 2 + 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK / l8WvCWPIPm49 "crossorigin = "anônimo"></script>
    <Roteiro src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"integridade =" SHA384-smHYKdLADwkXOn1EmN1qk / HfnUcbVRZyYmZ4qpPea6sjB / pTJ0euyQp0Mk8ck + T5 "crossorigin ="anonymous"></script>
</body>
</html>