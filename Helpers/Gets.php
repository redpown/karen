<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Get
 *
 * @author Redpo
 */
namespace Helpers;

class Gets {
    function Get_Css( $dir = ''){
        // Le o diretorio e trnaforma em um array
        $files = scandir($dir);
        foreach ( $files as $key => $value){
            //verifica se tem arquivo valido 
            if(($value != '.')&& ($value != '..')){
                echo '<!-- CSS '.$value.'-->';
                echo '<link rel="stylesheet" type="text/css" href="'.$dir.$value.'">';
            }
        }
    }
    function Get_JS( $dir = ''){
        // Le o diretorio e trnaforma em um array
        $files = scandir($dir);
        foreach ( $files as $key => $value){
            //verifica se tem arquivo valido 
            if(($value != '.')&& ($value != '..')){
                echo '<!-- script '.$value.'-->';
                echo '<script type="text/javascript" src="'.$dir.$value.'"></script>';
            }
        }
    }
    function Get_Jquery( $dir = ''){
        // Le o diretorio e trnaforma em um array
        $files = scandir($dir);
        foreach ( $files as $key => $value){
            //verifica se tem arquivo valido 
            if(($value != '.')&& ($value != '..')){
                echo '<!-- script '.$value.'-->';
                echo '<script type="text/javascript" src="'.$dir.$value.'"></script>';
            }
        }
    }
}