<?php

if (isset($_GET["error"])) {
  $error = $_GET["error"];
  switch ($error) {
    case 1:
      echo "<script>alert('Usuário não cadastrado!')</script>";
      break;
    case 2:
      echo "<script>alert('Login necessário')</script>";
      break;
  }
}

include __DIR__ . "./includes/header.php";

include __DIR__ . "./includes/login.php";

include __DIR__ . "./includes/footer.php";
