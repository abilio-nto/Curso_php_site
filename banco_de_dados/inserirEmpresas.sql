insert into empresas(nome,cnpj) values ('Bradesco',
47636766000120),
('vale',62456359000125),
('Cielo',16651269000178);

ALTER TABLE empresas modify cnpj varchar(14)


insert into empresas_unidades(empresa_id,cidade_id,sede) values (1,1,1),(1,2,0),(2,1,0),(2,2,1)