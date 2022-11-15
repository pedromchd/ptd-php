PRAGMA foreign_keys = ON;

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario
(
  "id" INTEGER NOT NULL,
  "username" VARCHAR(255) NOT NULL,
  "fullname" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id")
);

INSERT INTO usuario ("username", "fullname") VALUES
(
  "pedromchd",
  "Pedro Machado"
);
