PRAGMA foreign_keys = OFF;

DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS ptd;

PRAGMA foreign_keys = ON;

CREATE TABLE usuarios
(
  "id" INTEGER NOT NULL,
  "username" VARCHAR(255) NOT NULL UNIQUE,
  "fullname" VARCHAR(255) NOT NULL,
  "password" VARCHAR(255) NOT NULL,
  PRIMARY KEY ("id")
);

-- CREATE TABLE ptds
-- (
--   "id" INTEGER NOT NULL,
--   "periodo" NUMERIC NOT NULL,
--   "status" INTEGER NOT NULL CHECK("status" BETWEEN 0 AND 5),
--   PRIMARY KEY ("id")
-- );

INSERT INTO usuarios ("username", "fullname", "password") VALUES
("pedro", "Pedro Machado", "pedro"),
("marcos", "Marcos Copello", "marcos"),
("antonella", "Antonella Cuello", "marcos");

-- INSERT INTO ptd ("periodo", "status") VALUES
-- ("2022/1", "0"),
-- ("2022/2", "1");
