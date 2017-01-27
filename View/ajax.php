<?php
 
   
        # Informações sobre o banco de dados:
        $db_host = "localhost";
        $db_nome = "uhair";
        $db_usuario = "root";
        $db_senha = "";
        $db_driver = "mysql";
        # Informações sobre o sistema:
        $sistema_titulo = "Nome do Sistema";
        $sistema_email = "alguem@gmail.com";
        try
        {
            # Atribui o objeto PDO à variável $db.
            $db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
            # Garante que o PDO lance exceções durante erros.
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UFT-8.
            $db->exec('SET NAMES utf8');
        }
        catch (PDOException $e)
        {
            # Envia um e-mail para o e-mail oficial do sistema, em caso de erro de conexão.
            mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
            # Então não carrega nada mais da página.
            die("Connection Error: " . $e->getMessage());
        }
       if(isset($_POST["DELETAR"]))
       {
           if( $_POST["DELETAR"] == 0 ){ 
                $cod = $_POST["ID"] ;
                $stmt = $db->prepare("DELETE  FROM clientes WHERE cod = $cod ;");
                $stmt->execute(); 
           }
       }
       if(isset($_POST["UPDATE"]))
       {
           if( $_POST["UPDATE"] == 0 ){ 
                $cod   = $_POST["ID"] ;
                $nome  = $_POST["NOME"] ;
                $tel   = $_POST["TEL"] ;
                $email = $_POST["EMAIL"] ;
                $stmt = $db->prepare(
                          "UPDATE clientes "
                        . " SET "
                        . "nome  = '$nome' ,"
                        . "tel   = '$tel' ,"
                        . "email = '$email' "
                        . "WHERE cod = $cod;");
                $stmt->execute(); 
           }
       }
       
        
       $stmt = $db->prepare("SELECT * FROM clientes;");
       $stmt->execute();
       $rank = $stmt->fetchAll(PDO::FETCH_OBJ);
       //var_dump($rank);
       
       
     $loop ="";
   
      foreach($rank as $key => $value){
         //$loop.= '['.$value->cod.', "'.$value->nome.'", "'.$value->tel.'", "'.$value->email.'"],';
         $loop.= '<tr><td>'.$value->cod.'</td><td>'.$value->nome.'</td><td>'.$value->email.'</td><td>'.$value->tel.'</td><td><i class="fa fa-pencil-square-o"></i></td><td><i class="fa fa-times-circle" aria-hidden="true"></i></td></tr>';
       // $loop.= '<tr><td>'.$rank[$i][1].'</td><td>'.$rank[$i][2].'</td><td>'.$rank[$i][11].'</td><td>'.$rank[$i][8].'</td><td><i class="fa fa-pencil-square-o"></i></td><td><i class="fa fa-times-circle" aria-hidden="true"></i></td></tr>';
        }
    echo $loop;
       
      
      
?>

        
       