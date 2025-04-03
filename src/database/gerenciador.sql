-- Criando tabela de projetos, tarefas e status

CREATE TABLE IF NOT EXISTS projeto(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    id_status INTEGER,
    nome TEXT,
    conclusao INTEGER DEFAULT 0,
    qtd_tarefas INTEGER,
    FOREIGN KEY (id_status) REFERENCES status(id)
);

CREATE TABLE IF NOT EXISTS tarefa(
    id INTEGER AUTOINCREMENT PRIMARY KEY,
    id_projeto INTEGER,
    nome TEXT,
    descricao TEXT,
    concluida INTEGER DEFAULT 0,
    FOREIGN KEY (id_projeto) REFERENCES projeto(id)
);

CREATE TABLE IF NOT EXISTS status(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT
);

-- Inserindo valores inciais para a tabela status e tornando eles imutáveis
BEGIN TRANSACTION;
INSERT INTO status (nome) VALUES ('Em andamento');
INSERT INTO status (nome) VALUES ('Concluido');
INSERT INTO status (nome) VALUES ('Aguardando aprovação');
COMMIT;
