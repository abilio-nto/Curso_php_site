 insert into cidades (nome,area,estado_id) values ('Alagoa Grande', 899.5, (SELECT id FROM estados WHERE sigla='PB'));

 insert into cidades (nome,area,estado_id) values ('Recife',456.56, (SELECT id FROM estados WHERE sigla='PE'))

 insert into cidades (nome,area,estado_id) values ('São Paulo',996.456,(SELECT id from estados where sigla='SP'))

 SELECT * from cidades