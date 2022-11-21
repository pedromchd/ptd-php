PRAGMA foreign_keys = OFF;

DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS ptd;
DROP TABLE IF EXISTS cabecalho;
DROP TABLE IF EXISTS disciplinas;
DROP TABLE IF EXISTS complementares;
DROP TABLE IF EXISTS pesquisa;
DROP TABLE IF EXISTS extensao;
DROP TABLE IF EXISTS administracao;
DROP TABLE IF EXISTS atividades;
DROP TABLE IF EXISTS observacoes;

PRAGMA foreign_keys = ON;

CREATE TABLE usuarios
(
  "id" INTEGER NOT NULL,
  "username" VARCHAR(255) NOT NULL UNIQUE,
  "password" VARCHAR(255) NOT NULL,
  "fullname" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id")
);

-- CREATE TABLE ptd
-- (
--   "id" INTEGER NOT NULL,
--   "periodo" NUMERIC NOT NULL,
--   "status" INTEGER NOT NULL CHECK("status" BETWEEN 0 AND 5),
--   PRIMARY KEY ("id")
-- );

INSERT INTO usuarios ("username", "password", "fullname") VALUES
("pedro", "machado", "Pedro Machado"),
("marcos", "freitas", "Marcos Copello"),
("antonella", "cuello", "Antonella Cuello");

-- INSERT INTO ptd ("periodo", "status") VALUES
-- ("2022/1", "0"),
-- ("2022/2", "1");

CREATE TABLE cabecalho
(
  "id" INTEGER NOT NULL,
  "sala_permanencia" INTEGER NOT NULL,
  "area_conhecimento" VARCHAR(255) NOT NULL,
  "categoria" VARCHAR(255) NOT NULL,
  "regime_trabalho" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE disciplinas
(
  "id" INTEGER NOT NULL,
  "serie" INTEGER NOT NULL,
  "carga_horaria" TIME NOT NULL,
  "Divisão da Turma (grupos)" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id");
)

CREATE TABLE complementares
(
  "atividade complementar de ensino" VARCHAR(255) NOT NULL,
  "carga horaria semanal" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("atividade complementar de ensino")
);

CREATE TABLE pesquisa
(
  "atividade de pesquisa" VARCHAR(255) NOT NULL,
  "carga horaria semanal" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("atividade de pesquisa")
);

CREATE TABLE extensao
(
  "Atividade de Extensão" VARCHAR(255) NOT NULL,
  "Carga Horária Semanal" TIME NOT NULL,
  PRIMARY KEY ("Atividade de Extensão")
);

CREATE TABLE administracao
(
  "atividade adminstrativa" VARCHAR(255) NOT NULL,
  "portaria" INTEGER NOT NULL,
  "carga horaria" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("atividade adminstrativa")
);

CREATE TABLE atividades
(
  "atividade" VARCHAR(255) NOT NULL,
  "local" VARCHAR(255) NOT NULL,
  "dia da semana" VARCHAR(255) NOT NULL,
  "hora de inicio" VARCHAR(255) NOT NULL,
  "hora de termino " VARCHAR(255) NOT NULL,
  PRIMARY KEY ('atividade')
);

CREATE TABLE observacoes
(
  "campo de observação" VARCHAR(255) NOT NULL,
  PRIMARY KEY("campo de observacao")
);
