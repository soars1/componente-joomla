# com_projetos

Estou montando um componente para cadastrar projetos no painel do Joomla e depois mostrar esses projetos no site.

A ideia é salvar título, categoria, descrição e link do GitHub. O projeto ainda está em desenvolvimento, então não tem pacote instalável pronto.

Estou seguindo a [documentação de componentes do Joomla 5.4](https://manual.joomla.org/docs/5.4/building-extensions/components/component-development-tutorial/).

## Escopo

O componente `com_projetos` tem como objetivo cadastrar projetos no administrador do Joomla e exibir uma listagem pública no site. A implementação atual é inicial e ainda não oferece cadastro funcional.

## Estado atual

- Manifesto XML do componente.
- Estrutura inicial de administração e site.
- Tabela SQL para projetos.
- Página pública provisória.

Ainda faltam modelos, formulários, controladores de cadastro e consulta ao banco.

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
