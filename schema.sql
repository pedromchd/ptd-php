PRAGMA foreign_keys = OFF;

DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS ptd;

PRAGMA foreign_keys = ON;

CREATE TABLE usuarios
(
  "id" INTEGER NOT NULL,
  "username" VARCHAR(255) NOT NULL UNIQUE,
  "password" VARCHAR(255) NOT NULL,
  "fullname" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id")
);

-- CREATE TABLE ptds
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
