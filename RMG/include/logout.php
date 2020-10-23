<?php
session_start();

unset($_SESSION["pseudo"]);
unset($_SESSION["type"]);
header("Location:../../index.php");
?>