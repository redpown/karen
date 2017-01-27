<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Dao;
include '../Dao/Dao.php';
/**
 * Description of User_DAO
 *
 * @author Redpo
 */
class UserDAO extends \Dao\Dao {
    //put your code here
    public function PesquisarNome($nome = ''){
        if($nome != ''){
      $stmt = $this->conexao()->prepare("SELECT FROM clientes WHERE nome LIKE ='%$nome%';");
        }else{
            $stmt = $this->conexao()->prepare("SELECT * FROM clientes");
        }
       $stmt->execute();
       $Pesuisa = $stmt->fetchALL();
       //var_dump($rank);
       $resultado ="";
      /* foreach($Pesuisa as $key ){
           
           $resultado.= '['.$key->codigo.', "'.$key->codigo.'", "'.$key->codigo.'", "'.$key->codigo.'"],';
       }*/
       foreach($Pesuisa as $key ){
           
           $resultado.= '<tr><td>'.$key->codigo.'</td><td>'.$key->codigo.'</td><td>'.$key->codigo.'</td><td>'.$key->codigo.'</td><tr>';
       }
       echo $resultado;
    }
}
