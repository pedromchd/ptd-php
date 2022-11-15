<?php

if (!isset($_POST["username"]) || $_POST["username"] <= 0) {
  header("Location: /index.php?error=2");
  exit;
}

try {
  $db = new SQLite3("./database.db");
} catch (Exception $e) {
  die("ERROR: " . $e->getMessage());
}
