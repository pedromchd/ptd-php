<?php

if (!isset($_POST["username"])) {
  header("Location: index.php");
  exit;
}

$db = new SQLite3("./database.db");
