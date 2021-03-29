create table estados(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome varchar(45) NOT NULL,
    sigla varchar(2) NOT NULL,
    regiao ENUM('Norte','Nordeste','Centro-oeste','Sul','Sudeste' ) NOT NULL,
    populacao DECIMAL(5,2) NOT NULL,
    PRIMARY KEY(id),
    UNIQUE KEY (nome),
    UNIQUE KEY(sigla)
);