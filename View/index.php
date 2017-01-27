<?php
include '../Controller/ClientesController.php';
include '../Model/Clientes.php';
include '../Helpers/Gets.php';
include '../Helpers/Forms.php';
include '../Dao/UserDao.php';
include '../Model/FormsModels.php';

       $controllerCliente = new Clientes\ClientesController();
       $modelCliente = new Model\Clientes();
       $modelForms = new Model\FormsModels();
       $helperGet = new Helpers\Gets();
       $helperForm = new Helpers\Forms();
       $userDao = new Dao\UserDAO();
       
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        p{color:red;}
        #container{width: 100px; height: 100px; background: yellow; }
        td:nth-child(1){color:red !important;}
        td:nth-child(2){color:blue !important;}
        td:nth-child(3){color:green !important;}
        td:nth-child(4){color:orange !important;}
        td:nth-child(5){color:purple !important;}
    </style>
   
           
           
        <?php
       $modelForms->bootraptClass="form-group";
       $modelForms->inputs = ["nome"];
       $helperForm->GenerationForms($modelForms);
       
       
        ?>
     <table>
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2" align="center">Nenhum dado ainda...</td>
        </tr>
    </tbody>
</table>
<div>
    <button id="anterior" disabled>< Anterior</button>
    <span id="numeracao"></span>
    <button id="proximo" disabled>Próximo ></button>
</div>
                <script>
    
$(document).ready(function(){
   
 $resp = "andre";  
                

    console.log()
   var items = $resp;
    
   

    var tamanhoPagina = 3;
    var pagina = 0;

    function paginar() {
        $('table > tbody > tr').remove();
        var tbody = $('table > tbody');
        for (var i = pagina * tamanhoPagina; i < items.length && i < (pagina + 1) * tamanhoPagina; i++) {
            tbody.append(
                $('<tr>')
                    .append($('<td>').append(items[i][0]))
                    .append($('<td>').append(items[i][1]))
                     .append($('<td>').append(items[i][2]))
                      .append($('<td>').append(items[i][3]))
            )
        }
        $('#numeracao').text('Página ' + (pagina + 1) + ' de ' + Math.ceil(items.length / tamanhoPagina));
    }

    function ajustarBotoes() {
        $('#proximo').prop('disabled', items.length <= tamanhoPagina || pagina >= Math.ceil(items.length / tamanhoPagina) - 1);
        $('#anterior').prop('disabled', items.length <= tamanhoPagina || pagina == 0);
    }

    $(function () {
        $('#proximo').click(function () {
            if (pagina < items.length / tamanhoPagina - 1) {
                pagina++;
                paginar();
                ajustarBotoes();
            }
        });
        $('#anterior').click(function () {
            if (pagina > 0) {
                pagina--;
                paginar();
                ajustarBotoes();
            }
        });
        paginar();
        ajustarBotoes();
    });
    


$("#nome").keyup(function(){
    
        $cep = $(this).val();
        alert($cep);
            $.ajax({
                url : 'ajax.php',
                type: 'POST',
                data: {cep : $cep},
                cache: false,
                async:true,
                success: function (data){
                  $('table > tbody > tr').remove();
                    alert(data);
                    $resp = data;
                    $('table > tbody').append($resp);
                }
                
            });
    });
    ;
});




 </script>        
    </body>
</html>
