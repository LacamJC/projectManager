# Gerenciador de Projetos

[Início](#gerenciador-de-projetos) | [Objetivo](#objetivo) | [Metas](#metas) | [Tecnologias Utilizadas](#tecnologias-utilizadas) | [Estrutura do Banco de Dados](#estrutura-do-banco-de-dados) | [Classes Principais](#classes-principais) | [Futuras Atualizações](#futuras-atualizações)

Este documento descreve o projeto Gerenciador de Projetos, suas metas, tecnologias utilizadas e a estrutura das classes principais.

## Objetivo

O objetivo deste projeto é criar um sistema de gerenciamento de projetos simples e eficiente, permitindo aos usuários organizar e acompanhar o progresso de suas tarefas e projetos de forma centralizada.

## Metas

* Permitir a criação e edição de projetos.
* Permitir a criação e edição de tarefas dentro de cada projeto.
* Acompanhar o progresso de projetos e tarefas.
* Gerenciar o status de projetos (por exemplo, "Em andamento", "Concluído", "Aguardando aprovação").
* Fornecer uma interface de usuário intuitiva e responsiva.

## Tecnologias Utilizadas

* **Linguagem de Programação:** PHP puro
* **Banco de Dados:** SQLite
* **Front-end:**
    * Bootstrap (framework CSS para design responsivo)
    * SCSS (pré-processador CSS para estilos organizados)
    * BEM CSS (metodologia de nomenclatura para CSS modular)

## Estrutura do Banco de Dados

O banco de dados SQLite será estruturado com as seguintes tabelas:

* **`projeto`**: Armazena informações sobre os projetos.
* **`tarefa`**: Armazena informações sobre as tarefas dentro de cada projeto.
* **`status`**: Armazena os diferentes status que um projeto pode ter.

## Classes Principais

O sistema será estruturado em torno das seguintes classes principais:

### 1. `Projeto` (Objeto Controlador)

* **Responsabilidades**: Gerenciar e coordenar as tarefas dentro de um projeto.
* **Atributos**:
    * `id` (int): Identificador único do projeto (chave primária).
    * `id_status` (int): Identificador do status do projeto (chave estrangeira para a tabela `status`).
    * `nome` (string): Nome do projeto.
    * `conclusao` (int): Percentual de conclusão do projeto.
    * `qtd_tarefas` (int): Quantidade de tarefas no projeto.
* **Métodos**:
    * `getters/setters`: Métodos para acessar e modificar os atributos.
    * `adicionarTarefa(Tarefa tarefa)`: Adiciona uma tarefa ao projeto.
    * `removerTarefa(Tarefa tarefa)`: Remove uma tarefa do projeto.

### 2. `Tarefa` (Objeto Interativo)

* **Responsabilidades**: Representar as tarefas individuais dentro de um projeto.
* **Atributos**:
    * `id` (int): Identificador único da tarefa (chave primária).
    * `id_projeto` (int): Identificador do projeto ao qual a tarefa pertence (chave estrangeira para a tabela `projeto`).
    * `nome` (string): Nome da tarefa.
    * `descricao` (string): Descrição detalhada da tarefa.
    * `concluida` (int): Indica se a tarefa foi concluída (0 = não, 1 = sim).
* **Métodos**:
    * `getters/setters`: Métodos para acessar e modificar os atributos.
    * `criarTarefa()`: Cria uma nova tarefa.
    * `atualizarTarefa()`: Atualiza os detalhes da tarefa.
    * `removerTarefa()`: Remove a tarefa.
    * `concluirTarefa()`: Marca a tarefa como concluída.

### 3. `Status` (Objeto Auxiliar)

* **Responsabilidades**: Gerenciar os diferentes status que um projeto pode ter.
* **Atributos**:
    * `id` (int): Identificador único do status (chave primária).
    * `nome` (string): Nome do status (por exemplo, "Em andamento", "Concluído", "Aguardando aprovação").
* **Métodos**:
    * `getters/setters`: Métodos para acessar e modificar os atributos.

## Futuras Atualizações

* **Implementação do padrão Row Data Gateway:**
    * Para isolar o acesso ao banco de dados e encapsular a lógica de persistência, pretendo implementar o padrão de design Row Data Gateway.
    * Este padrão criará classes específicas para cada tabela do banco de dados (por exemplo, `ProjetoGateway`, `TarefaGateway`, `StatusGateway`), responsáveis por realizar as operações de banco de dados (inserção, atualização, exclusão, busca) para cada entidade.
    * Isso tornará o código mais organizado, flexível e fácil de testar, além de facilitar a manutenção e a reutilização do código de acesso ao banco de dados.

* **Adição de funcionalidades:**
    * Gerenciamento de usuários e permissões.
    * Notificações e lembretes.
    * Relatórios e gráficos de progresso.
    * Importação e exportação de dados.
    * Integração com outras ferramentas (por exemplo, calendário, e-mail).