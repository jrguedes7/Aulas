# Aulas de PHP

Este repositório contém as atividades organizadas por pasta.

## Estrutura

- `aula_01/` - atividade inicial com as 7 questões
- `aula_02/` - atividade de estruturas de decisão e seleção
- `docker-compose.yml` - ambiente PHP 8.3

## Como executar

```bash
docker compose up -d
```

Depois, acesse o container e rode os scripts da pasta desejada:

```bash
docker exec -it php_aulas php /app/aula_02/questao1.php
```
