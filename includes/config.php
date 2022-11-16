<?php

if (!isset($_POST["username"]) || $_POST["username"] <= 0) {
  header("Location: /index.php");
  exit;
}

$db = new SQLite3("./database.db");
