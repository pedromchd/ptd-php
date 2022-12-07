<?php
// session_start();

$db = new SQLite3("./assets/database.db");

// if (isset($_SESSION["username"], $_SESSION["password"])) {
//   $query = $db->prepare("SELECT fullname, password FROM usuarios WHERE username = :username AND password = :password");
//   $query->bindValue(":username", $_SESSION["username"]);
//   $query->bindValue(":password", $_SESSION["password"]);
//   $result = $query->execute();
//   $usuario = $result->fetchArray(SQLITE3_ASSOC);
//   $fullname = $usuario["fullname"];
// }
