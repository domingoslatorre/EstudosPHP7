CREATE TABLE alunos ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(150) NOT NULL, 
    email VARCHAR(100) NULL, 
    PRIMARY KEY (id)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE clientes ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(150) NOT NULL, 
    email VARCHAR(100) NULL, 
    saldo DECIMAL(10,2) NOT NULL,
    ativo BOOLEAN NOT NULL,
    dataCadastro DATETIME NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE telefones ( 
    ddd CHAR(2) NOT NULL, 
    numero VARCHAR(9) NULL, 
    id_cliente INT NOT NULL,
    CONSTRAINT PK_Telefones PRIMARY KEY (ddd,numero),
    CONSTRAINT FK_Clientes FOREIGN KEY (id_cliente) REFERENCES clientes(id)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;