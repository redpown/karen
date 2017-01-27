<?php
include_once '../Dao/UserDao.php';

$Resultado = new \Dao\UserDAO();
$Resultado->PesquisarNome($_POST["ID"]);

