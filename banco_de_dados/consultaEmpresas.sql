select e.nome, c.nome from empresas e, cidades c, empresas_unidades eu where e.id = eu.empresa_id and c.id = eu.cidade_id

select * from cidades 