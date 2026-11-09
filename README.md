# com_projetos

Estou montando um componente para cadastrar projetos no painel do Joomla e depois mostrar esses projetos no site.

A ideia é salvar título, categoria, descrição e link do GitHub. O projeto ainda está em desenvolvimento, então não tem pacote instalável pronto.

Estou seguindo a [documentação de componentes do Joomla 5.4](https://manual.joomla.org/docs/5.4/building-extensions/components/component-development-tutorial/).

## Escopo

O componente `com_projetos` tem como objetivo cadastrar projetos no administrador do Joomla e exibir uma listagem pública no site. A listagem pública já possui modelo de consulta e template dinâmico, mas o cadastro administrativo ainda não foi implementado nem validado no Joomla.

## Estado atual

- Manifesto XML do componente.
- Estrutura inicial de administração e site.
- Tabela SQL para projetos.
- Página pública dinâmica com consulta de projetos publicados, saída HTML escapada e links externos validados.

Ainda faltam os modelos, formulários e controladores do CRUD administrativo. A integração pública precisa ser testada em uma instalação real do Joomla.

## Dados de um projeto

| Campo | Tipo | Finalidade |
| --- | --- | --- |
| `id` | Inteiro | Identificador único |
| `title` | Texto até 150 caracteres | Nome do projeto |
| `category` | Texto até 100 caracteres | Categoria |
| `description` | Texto | Descrição |
| `github_url` | Texto até 2048 caracteres | Endereço do repositório |
| `state` | Inteiro | Estado de publicação |

## Estrutura do repositório

- `com_projetos/com_projetos.xml`: manifesto de instalação.
- `com_projetos/administrator/`: arquivos do administrador.
- `com_projetos/components/`: arquivos da área pública.
- `README.md`: documentação do desenvolvimento.

## Referência de versão

O desenvolvimento usa como referência a documentação do Joomla 5.4. A compatibilidade final com versões específicas do Joomla ainda precisa ser testada.

## Pré-requisitos para desenvolvimento

- Instalação local do Joomla compatível com a versão em estudo.
- PHP e banco de dados suportados pela instalação do Joomla.
- Acesso ao painel administrativo.
- Editor de código e Git.

## Instalação durante o desenvolvimento

1. Revise o manifesto `com_projetos.xml` e os caminhos declarados.
2. Prepare um pacote ZIP com o manifesto na raiz e as pastas esperadas.
3. Tente instalar pelo gerenciador de extensões do Joomla em ambiente de testes.
4. Verifique mensagens de instalação e registros de erro.

**Atenção:** o pacote ainda não foi validado como instalável; estas etapas são um roteiro de teste, não uma garantia de funcionamento.

## Banco de dados

O arquivo `install.mysql.utf8.sql` define a tabela `#__projetos`. O prefixo `#__` é substituído pelo Joomla durante a instalação. A tabela guarda os dados principais dos projetos, mas ainda não existe interface de gerenciamento pronta.

## Publicação

O campo `state` possui valor padrão `1` na definição SQL. A aplicação ainda precisa implementar a filtragem de projetos publicados e as regras de alteração de estado antes de disponibilizar dados reais no site.

## Página pública

O template `tmpl/projetos/default.php` exibe os projetos publicados e uma mensagem para lista vazia. Textos são escapados e links externos são limitados a HTTPS no domínio github.com. A funcionalidade ainda precisa de testes de integração.

## Próximos passos no administrador

1. Criar modelo e tabela de edição do projeto.
2. Adicionar formulário com validação.
3. Implementar listagem e ações de cadastro, edição e exclusão.
4. Configurar permissões e tokens CSRF nas ações de escrita.
5. Traduzir os rótulos para português do Brasil.

## Próximos passos no site

1. Consultar projetos publicados no banco.
2. Ordenar a listagem de forma previsível.
3. Escapar os dados exibidos no HTML.
4. Validar links externos antes de renderizá-los.
5. Criar estados de lista vazia e erro.

## Checklist de segurança

- [ ] Validar entradas no servidor.
- [ ] Verificar autorização nas operações administrativas.
- [ ] Proteger formulários de escrita com token CSRF.
- [x] Escapar títulos, categorias e descrições na saída HTML pública.
- [x] Validar o esquema de URLs externas na listagem pública.
- [ ] Utilizar consultas parametrizadas na camada de dados.

## Checklist de acessibilidade

- [ ] Usar títulos em ordem hierárquica.
- [ ] Garantir navegação por teclado.
- [ ] Manter foco visível nos links e controles.
- [ ] Associar rótulos aos campos do formulário.
- [ ] Exibir erros de validação de forma textual.
- [ ] Verificar contraste e comportamento responsivo.

## Cenários de teste planejados

- Instalação e atualização do componente.
- Cadastro com campos obrigatórios preenchidos e vazios.
- Edição de um projeto existente.
- Exclusão com confirmação e permissão adequada.
- Exibição de projetos publicados e ocultação dos não publicados.
- Listagem vazia e URL de GitHub inválida.

## Fluxo de contribuição

Faça alterações pequenas e focadas, confira o diff antes de enviar e registre em cada commit o motivo da mudança. Para alterações em PHP, valide a sintaxe; para o manifesto, valide o XML. Testes em uma instalação Joomla devem ser feitos antes de considerar uma funcionalidade concluída.

## Convenções do projeto

- Manter nomes de classes e caminhos alinhados ao padrão do Joomla.
- Utilizar as APIs do Joomla para acesso a banco, rotas e autorização.
- Evitar HTML misturado à lógica de persistência.
- Centralizar textos de interface em arquivos de idioma.
- Priorizar mudanças pequenas e revisáveis.

## Empacotamento

O manifesto controla os arquivos incluídos no pacote de instalação. Sempre que novas pastas ou arquivos forem criados, confira se estão contemplados no XML. Não inclua configurações locais, credenciais, caches ou arquivos temporários no ZIP.

## Critérios para uma primeira versão utilizável

- [ ] Instalação e desinstalação testadas.
- [ ] Cadastro e edição funcionando.
- [ ] Permissões administrativas verificadas.
- [ ] Listagem pública ligada ao banco.
- [ ] Traduções carregadas corretamente.
- [ ] Testes manuais concluídos sem erros críticos.

## Diagnóstico de problemas

Se o componente não instalar, confira primeiro o caminho do manifesto, a estrutura do ZIP e os arquivos declarados no XML. Se uma página não carregar, verifique o namespace, o controlador e os registros de erro do Joomla/PHP. Problemas de banco exigem conferir o prefixo de tabelas e a execução do SQL de instalação.

## Documentação complementar

Consulte a pasta `docs/` para arquitetura, instalação local, banco de dados, segurança, acessibilidade, testes manuais e roadmap.
