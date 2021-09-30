CRIAR BASE DE DADOS livraria DEFAULT CHARACTER SET utf8;
USE livraria;
CRIAR TABELA livros(
    nome           VARCHAR( 255 ) NÃO NULO,
    autor          VARCHAR( 255 ),
    quantidade     INT NÃO NULO,
    preco          VARCHAR( 255 ) NÃO NULO,
    sinalizador           TINYINT( 1 ) NULL DEFAULT 0,
    data           DATE NOT NULL ,
CHAVE PRIMÁRIA(nome))