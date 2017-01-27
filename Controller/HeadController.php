<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeadController
 *
 * @author Redpo
 */
namespace Controller;
class HeadController {
    function setHead(){
        echo "<head>";
        $htmlHead-getMeta($objModelMeta);
        $helperGet->Get_Css('../Assets/CSS/');
        $helperGet->Get_Jquery('../Assets/JQuery/');
        $helperGet->Get_JS('../Assets/JS/');
        echo"</head>";
    }
}
