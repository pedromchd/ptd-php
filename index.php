<?php

include __DIR__ . "./includes/header.php";

if (!isset($_POST["usuario"])) {
  include __DIR__ . "./includes/login.php";
} else {
  include __DIR__ . "./includes/ptd.php";
}

include __DIR__ . "./includes/footer.php";
