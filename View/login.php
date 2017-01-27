<?php
include '../Sys/System.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php $helperGet->Get_Css('../Assets/CSS/')?>
        <?php $helperGet->Get_Jquery('../Assets/JQuery/')?>
        <?php $helperGet->Get_JS('../Assets/JS/')?>
        
        <?php ?>
        
    </head>
    <style>
        td:nth-child(1){color:red !important;}
        td:nth-child(2){color:blue !important;}
        td:nth-child(3){color:green !important;}
        td:nth-child(4){color:orange !important;}
        td:nth-child(5){color:purple !important;}
    </style>
    <body class="container">  
        <div class="col-lg-12 header">
        </div>
<div class="col-lg-12">
    
    <div class="col-xs-12 col-md-4 col-md-offset-4 logField">
   <?php
       $modelForms->bootsraptClass = "form-group";
       $modelForms->inputs  = ["email" , "senha"];
       $modelForms->btnName1 = "Logar";
       $modelForms->btnName2 = "Cancelar";
       $helperForm->GenerationForms($modelForms);
   ?>
    </div>
    
</div>
        <div class="col-lg-12 footer">
        </div>
    </body>
</html>