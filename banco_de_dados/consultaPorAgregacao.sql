select regiao as 'Região',sum(populacao) as Total from estados group by regiao order by regiao desc;

select sum(populacao) as total from estados;