    <main>
    <?php
        include './pagina_inicial/header.php';
    ?>

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
       $sql = "SELECT * FROM categorias";

        $result = $connection->query($sql);

        if($connection ->query($sql) == true){
            $response = [
                'Mensagem'=> 'Categoria buscada com sucesso!'

            ];
        } else{
            $response = [
                'Mensagem'=> 'Erro ao buscar categoria'
            ];
        }
        echo json_encode($response);
    // }
    ?>
    <?php
        include './pagina_inicial/footer.php';
    ?>
    </main>