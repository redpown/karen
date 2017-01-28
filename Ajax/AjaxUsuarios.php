<?php
include_once '../Dao/UserDao.php';
$id = $_POST["ID"];
$Resultado = new \Dao\UserDAO();
$Resultado->PesquisarNome($id);

