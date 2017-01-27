<?php
include '../Sys/System.php';

       
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
   
        <?php 
        $HeadController->setHead();
       ?>
        

    <style>
        td:nth-child(1){color:red !important;}
        td:nth-child(2){color:blue !important;}
        td:nth-child(3){color:green !important;}
        td:nth-child(4){color:orange !important;}
        td:nth-child(5){color:purple !important;}
    </style>
    <body class="container">
        <div class="col-md-12">
           
           
        <?php
       $modelForms->bootsraptClass = "form-group";
       $modelForms->inputs = ["nome"];
       $helperForm->GenerationForms($modelForms);
       
       
        ?>
        </div>
        
        <div class="col-md-12 table-responsive">
        <table class="table table-bordered table-striped table-hover">
        <thead><tr><th>Id</th><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Editar</th><th>Excluir</th></tr></thead>
        <tbody>
        </tbody>
        </table>
        </div>   
     
            <div class="delet modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir</h4>
      </div>
      <div class="modal-body">
       <p>Deseja e excluir o usuario <strong></strong>selecionado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="exluir btn btn-primary">Excluir</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="edit modal fade " tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar</h4>
      </div>
      <div class="modal-body">
          <p>Deseja editar o usuario <strong></strong>selecionado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="salvar btn btn-primary">Salvar Mudanças</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="campos modal fade " tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Atualizar cadastro</h4>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="cliente">Nome:</label>
              <input type="text" class="form-control" id="cliente" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="tel">Telefone</label>
              <input type="text" class="form-control" id="tel" placeholder="Another input">
            </div>
              <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Another input">
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="salvar btn btn-primary">Salvar Mudanças</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
            
            

                
    </body>
</html>