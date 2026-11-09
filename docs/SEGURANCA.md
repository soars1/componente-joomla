# Segurança

- A listagem pública deve consultar somente registros com `state = 1`.
- Todo conteúdo vindo do banco deve ser escapado antes de entrar no HTML.
- Links externos só devem ser renderizados após validação do protocolo e domínio.
- Ações administrativas futuras devem exigir autorização e token CSRF.
- SQL de escrita deve usar as APIs do Joomla e parâmetros seguros.
- Não versionar credenciais, logs ou configurações locais.

## Revisão antes da publicação
Verificar se URLs com caracteres especiais, redirecionamentos e subdomínios inesperados são tratados corretamente.
