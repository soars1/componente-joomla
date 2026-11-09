# Banco de dados

Tabela: `#__projetos`.

| Coluna | Uso |
| --- | --- |
| id | Chave primária |
| title | Título do projeto |
| category | Categoria |
| description | Descrição |
| github_url | URL opcional |
| state | Estado de publicação |

O modelo público consulta apenas `state = 1` e ordena por título e ID.

## Dados de teste

Substitua `#__` pelo prefixo real antes de executar manualmente:

```sql
INSERT INTO `#__projetos` (title, category, description, github_url, state)
VALUES ('Projeto de teste', 'Web', 'Exemplo para validação local.', 'https://github.com/', 1);
```

Não executar exemplos de teste em banco de produção.
