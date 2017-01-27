<?php

include '../Controller/ClientesController.php';
include '../Controller/HeadController.php';
include '../Model/Clientes.php';
include '../Helpers/Gets.php';
include '../Helpers/Forms.php';
include '../Dao/UserDao.php';
include '../Model/FormsModels.php';
include '../Model/Meta.php';
include '../Helpers/htmlHead.php';

       $controllerCliente  = new Controller\ClientesController();
       $HeadController     = new Controller\HeadController();
       $modelCliente       = new Model\Clientes();
       $modelForms         = new Model\FormsModels();
       $helperGet          = new Helpers\Gets();
       $helperForm         = new Helpers\Forms();
       $userDao            = new Dao\UserDAO();
       $Meta               = new Model\Meta();
       $htmlHead           = new Helpers\htmlHead();


