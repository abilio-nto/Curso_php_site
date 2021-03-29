update estados set nome = 'Maranhão' where sigla = 'MA';

select nome from estados where sigla='MA';

update estados set nome='Paraná' where sigla='PR';


select nome, sigla, populacao from estados where sigla='PR';

update estados set populacao=5.0 where sigla='PB';

select nome,sigla, populacao from estados where sigla='PB'