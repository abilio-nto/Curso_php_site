select e.nome as estado, c.nome as cidade, regiao as regiao from estados e, cidades c where e.id = c.estado_id;

select e.nome as estado,c.nome as cidades, regiao from estados e inner join cidades c on e.id = c.estado_id;