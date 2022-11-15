<?php

if (!isset($_GET["username"]) || $_GET["username"] <= 0) {
  header("Location: /index.php?error=2");
  exit;
}

try {
  $db = new SQLite3("./database.db");
} catch (Exception $e) {
  die("ERROR: " . $e->getMessage());
}
