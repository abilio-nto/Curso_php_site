insert into prefeitos (nome,cidade_id) values ('Dr Sobrinho',(select id from cidades where nome ='Alagoa Grande'))
insert into prefeitos (nome,cidade_id) values ('João Campos',(select id from cidades where nome ='Recife'))
insert into prefeitos (nome,cidade_id) values ('João Doria - Calcinha apertada', null)
insert into prefeitos (nome,cidade_id) values ('Cicero lucena', null)
update prefeitos set cidade_id = null where cidade_id = 3

select * from prefeitos