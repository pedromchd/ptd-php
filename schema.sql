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
  "modalidade" VARCHAR(255) NOT NULL,
  "curso" VARCHAR(255) NOT NULL,
  "materia" VARCHAR(255) NOT NULL,
  "serie" INTEGER NOT NULL,
  "carga_horaria" VARCHAR(8) NOT NULL,
  PRIMARY KEY ("id"),
  FOREIGN KEY ("modalidade") REFERENCES modalidades ("id") ON DELETE CASCADE,
  FOREIGN KEY ("curso") REFERENCES cursos ("id") ON DELETE CASCADE,
  FOREIGN KEY ("materia") REFERENCES materias ("id") ON DELETE CASCADE
);

CREATE TABLE complementares
(
  "id" INTEGER NOT NULL,
  "atividade_comp" VARCHAR(255) NOT NULL,
  "carga_horaria" VARCHAR(8) NOT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE pesquisa
(
  "id" INTEGER NOT NULL,
  "atividade_pesq" VARCHAR(255) NOT NULL,
  "carga_horaria" VARCHAR(8) NOT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE extensao
(
  "id" INTEGER NOT NULL,
  "atividade_ext" VARCHAR(255) NOT NULL,
  "carga_horaria" VARCHAR(8) NOT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE administracao
(
  "id" INTEGER NOT NULL,
  "atividade_adm" VARCHAR(255) NOT NULL,
  "portaria" NUMERIC NOT NULL,
  "carga_horaria" VARCHAR(8) NOT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE atividades
(
  "id" INTEGER NOT NULL,
  "atividade" VARCHAR(255) NOT NULL,
  "local" VARCHAR(255) NOT NULL,
  "dia_semana" VARCHAR(255) NOT NULL,
  "hora_inicio" TIME NOT NULL,
  "hora_termino " TIME NOT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE observacoes
(
  "id" INTEGER NOT NULL,
  "observacao" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id")
);

INSERT INTO usuarios ("username", "password", "fullname") VALUES
("pedro", "machado", "Pedro Machado"),
("marcos", "freitas", "Marcos Copello"),
("antonella", "cuello", "Antonella Cuello");

-- INSERT INTO ptd ("periodo", "status") VALUES
-- ("2022/1", "0"),
-- ("2022/2", "1");
