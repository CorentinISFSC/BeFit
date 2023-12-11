<?php
require("Class/Router.php");

$URI_path = $_SERVER["REQUEST_URI"];

Router::page_loader("BeFit - Programmes", "Retrouvez tous les programmes de BeFit", "programme");
