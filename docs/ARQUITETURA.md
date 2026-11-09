# Arquitetura do componente

O componente usa o namespace Gabriel\\Component\\Projetos.

## Site
- `Site\\Model\\ProjetosModel`: consulta somente projetos publicados.
- `Site\\View\\Projetos\\HtmlView`: fornece os itens ao template.
- `tmpl/projetos/default.php`: apresenta os itens e escapa o conteúdo.

## Administrador
O provedor de serviços existe, mas o CRUD administrativo ainda precisa ser implementado e testado.

## Persistência
A tabela `#__projetos` guarda título, categoria, descrição, URL do GitHub e estado de publicação.

## Limitações
Ainda não há paginação, formulário de edição, permissões por operação ou testes automatizados.
