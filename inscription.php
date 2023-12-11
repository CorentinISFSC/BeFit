<?php
require("Class/Router.php");

$URI_path = $_SERVER["REQUEST_URI"];

Router::page_loader("BeFit - S'inscrire", "S'inscrire sur BeFit", "inscription");
?>