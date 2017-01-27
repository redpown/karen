<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

/**
 * Description of IndexController
 *
 * @author Redpo
 */
class IndexController {
     public function indexAction()
    {
        //redirecionando para a pagina de lista de contatos
        header('Location:.\View\login.php');
    }
}
