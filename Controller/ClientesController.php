<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clientes_Controller
 *
 * @author Redpo
 */


namespace Controller;
   
    class ClientesController {
        //put your code here
        public function loginAction ($objClientes){
            $objClientes->nome = "\n Andre";
            $objClientes->cpf = "\n 394394394394";
            echo '<h1 mydate ="13/10/1989">'.$objClientes->nome.'</h1>'  ;
            echo '<p tipo="cpf">'.$objClientes->cpf.'</p>';
        }
    }
