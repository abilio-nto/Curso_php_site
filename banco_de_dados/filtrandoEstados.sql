select * from estados;

select nome,sigla from estados;

select sigla, nome as "Nome dos Estados" from estados where regiao = 'nordeste'

select nome as 'Nome dos Estados',sigla,populacao from estados where populacao >=10 order by populacao 