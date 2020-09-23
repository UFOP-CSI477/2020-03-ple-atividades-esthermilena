<?php

//Configuração:
$bdfile ="./db/database.sqlite";
$bduser ="";
$bdpassword = "";
$bdhost ="";

$strConnection = "sqlite:" .$bdfile;

$connection = new PDO($strConnection, $bduser, $bdpassword);

//var_dump($connection);