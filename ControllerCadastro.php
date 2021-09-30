<? php
require_once ( "../model/cadastroLivro.php" );
class cadastroController {
     $ cadastro privado ;
    public  function  __construct () {
        $ this -> cadastro = novo  Cadastro ();
        $ this -> incluir ();
    }
     função  privada incluir () {
        $ this -> cadastro -> setNome ( $ _POST [ 'nome' ]);
        $ this -> cadastro -> setAutor ( $ _POST [ 'autor' ]);
        $ this -> cadastro -> setQuantidade ( $ _POST [ 'quantidade' ]);
        $ this -> cadastro -> setPreco ( $ _POST [ 'preco' ]);
        $ this -> cadastro -> setData ( date ( 'Ym-d' , strtotime ( $ _POST [ 'data' ])));
        $ result = $ this -> cadastro -> incluir ();
        if ( $ resultado > = 1 ) {
            echo  "<script> alert ('Registro incluído com sucesso!'); document.location = '.. / view / cadastro.php' </script>" ;
        } else {
            echo  "<script> alert ('Erro ao gravar registro !, responsável se o livro não está duplicado'); history.back () </script>" ;
        }
    }
}
novo cadastroController ();