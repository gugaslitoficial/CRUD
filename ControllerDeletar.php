<? php
require_once ( "../model/banco.php" );
classe deleta {
    private  $ deleta ;
    public  function  __construct ( $ id ) {
        $ this -> deleta = novo  Banco ();
        if ( $ this -> deleta -> deleteLivro ( $ id ) == TRUE ) {
            echo  "<script> alert ('Registro deletado com sucesso!'); document.location = '.. / view / index.php' </script>" ;
        } else {
            echo  "<script> alert ('Erro ao deletar registro!'); history.back () </script>" ;
        }
    }
}
novo deleta ( $ _GET [ 'id' ]);
?>