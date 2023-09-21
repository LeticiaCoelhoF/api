<?php
	include 'cors_policy.php';
	include 'conexao.php';

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){

         // Obtém o corpo da solicitação POST
        // $data = file_get_contents("php://input");

        // Decodifica o JSON para um objeto PHP
        // $requestData = json_decode($data);

        // Agora você pode acessar os dados usando $requestData
        // $id = $requestData->id;

       $nome = 'Infraestrutura';
       $sql = "INSERT INTO categorias values(0, '$nome')";
    
        $result = $connection->query($sql);
        
        if($connection ->query($sql) == true){
            $response = [
                'mensagem'=> 'Categoria inserida com sucesso!'
                
            ];
        } else{
            $response = [
                'mensagem'=> 'Erro ao inserir categoria'
            ];
        }

    
        echo json_encode($response);
    // }
?>

<!-- &nome=desenvolvimento -->