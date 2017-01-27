<?php   

/*if($_SERVER['REQUEST_METHOD'] == "POST"){

    function busca_cep($cep){  
        $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');  
        if(!$resultado){  
            $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";  
        }  
        parse_str($resultado, $retorno);   
        return $retorno;  
    }  

    $resultado_busca = busca_cep($_POST['cep']);  

    echo json_encode($resultado_busca);

}*/
/*$cep = $_POST['cep'];*/

$pdo = new PDO("mysql:dbname=uhair;host=localhost","root","");
$statement = $pdo->prepare("SELECT id, nome, email FROM usuario WHERE nome ='dois';");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$obj='';
foreach ($results as $key => $value) {
    $obj = $value;
}
echo json_encode($obj);

/*$cep = $_POST['cep'];
$pdo = new PDO("mysql:dbname=uhair;host=localhost","root","");
$statement = $pdo->prepare("SELECT id, nome, email FROM usuario WHERE nome like '%$cep%';");
$statement->execute();
$results = $statement->fetchAll();
$obj = [];
for($i=0; $i < sizeof($results);$i++) {
    for($j=0; $j < 3; $j++) {    
       $copo = $results[$i][$j];
       array_push($obj,$copo);
    }   
}

/* echo json_encode($obj);*/
 
echo "<p>hello world</>";

?>