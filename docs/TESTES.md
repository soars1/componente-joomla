# Testes manuais

## Preparação
- Instalar o pacote em uma instalação local do Joomla 5.
- Confirmar a criação da tabela com o prefixo configurado.
- Abrir a página pública do componente.

## Listagem
- Sem registros publicados, deve aparecer a mensagem de lista vazia.
- Com um projeto publicado, devem aparecer título, categoria e descrição.
- Projetos com estado 0 ou -2 não devem aparecer.
- A ordenação deve seguir título e, em caso de empate, ID.
- Textos com caracteres HTML devem aparecer como texto, sem execução.

## Links
- Links HTTPS para github.com devem abrir em nova aba.
- URLs HTTP, javascript: e domínios diferentes não devem gerar links.
- Confirmar que o link possui rel="noopener noreferrer".

## Verificações pendentes
- Testar instalação, rotas e compatibilidade na versão exata do Joomla.
- Testar cadastro administrativo quando implementado.
