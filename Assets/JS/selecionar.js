
   $("form").submit(function(){
       return false;
   }); 
   
    $("#nome").keypress(function(e){
        $procurar = $(this).val();
        if(e.which == 13){
        alert($procurar);
            $.ajax({
                url : 'ajax.php',
                type: 'POST',
                dataType : 'html',
                data: {PROCURAR : $procurar},
                cache: false,
                success: function (data){
                    $('table > tbody > tr').remove();
                    alert(data);
                    $resp = data;
                    $('table > tbody').append($resp);
                }
            });
        }
    });
    $(".pesquisar").click(function(){
        $procurar = $("#nome").val();
        alert($procurar);
            $.ajax({
                url : 'ajax.php',
                type: 'POST',
                dataType : 'html',
                data: {PROCURAR : $procurar},
                cache: false,
                success: function (data){
                    $('table > tbody > tr').remove();
                    alert(data);
                    $resp = data;
                    $('table > tbody').append($resp);
                }
            });
    });
    
    
    //Carrega as variaveis com os valores da tabela selecionada
   /* $("tr").hover(function(){
        $id    = $(this).find("td:nth-child(1)").text(); 
        $nome  = $(this).find("td:nth-child(2)").text(); 
        $email = $(this).find("td:nth-child(3)").text(); 
        $tel   = $(this).find("td:nth-child(4)").text(); 
                //console.log($id, $nome, $email, $tel);
            $removed = $(this);   
            });*/
    //exclui do banco de dados a tabela selecionada
   
            
   
     $(document).on('mouseover','tr',function(){
        $id    = $(this).find("td:nth-child(1)").text(); 
        $nome  = $(this).find("td:nth-child(2)").text(); 
        $email = $(this).find("td:nth-child(3)").text(); 
        $tel   = $(this).find("td:nth-child(4)").text(); 
             
     });
     
    $(document).on('click','td:nth-child(6)',function(){
        $('.delet').modal('show') ;
    });
    
     $(document).on('click','td:nth-child(5)',function(){
        $('.campos').modal('show') ;
    });
    
     $(".exluir ").click(function(){
         $removerID = 0;
        
            $.ajax({
                url : 'ajax.php',
                type: 'POST',
                data: { DELETAR : $removerID , ID : $id },
                cache: false,
              
                success: function (data){
                    alert(data);
                    $resp = data;
                    $('table > tbody > tr').remove();
             $('table > tbody').append($resp);
                }
                
            });
         $('.delet').modal('hide');
         
     });
     $(".salvar ").click(function(){
         $UPDATE      = 0;
         $compo_nome  = $("#cliente").val();
         $compo_email = $("#email").val();
         $compo_tel   = $("#tel").val();
        
            $.ajax({
                url : 'ajax.php',
                type: 'POST',
                data: {
                    UPDATE : $UPDATE ,
                    ID     : $id ,
                    NOME   : $compo_nome ,
                    TEL    : $compo_tel,
                    EMAIL  : $compo_email
                },
                cache: false,
              
                success: function (data){
                    alert(data);
                    $resp = data;
                    $('table > tbody > tr').remove();
             $('table > tbody').append($resp);
                }
                
            });
         $('.campos').modal('hide');//esconde o modal
         $('input').val("");//limpa os inputs
     });




