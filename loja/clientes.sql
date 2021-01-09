create table clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cpf VARCHAR (11) NOT NULL,
    nome VARCHAR (55) NOT NULL, 
    nascimento DATE NOT NULL,
    endereco VARCHAR (55) NOT NULL,
    bairro VARCHAR (55) NOT NULL,
    cidade VARCHAR (55) NOT NULL,
    uf VARCHAR (5) NOT NULL,
    ref VARCHAR (11)
);