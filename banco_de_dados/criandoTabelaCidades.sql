CREATE TABLE IF NOT EXISTS cidades(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    estado_id INT UNSIGNED NOT NULL,
    area DECIMAL(10,5) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(estado_id) REFERENCES estados(id)


);