    <?php
        include './pagina_inicial/header.php';
    ?>

    <?php
        include 'cors_policy.php';
        include 'conexao.php';

            $nome = 'Infraestrutura';

            $sql = "INSERT INTO categorias values(0, '$nome');";
        
            $result = $connection->query($sql);
            
            if($connection->query($sql) === true){
                $response = ['Mensagem'=> 'Categoria inserida com sucesso!'];
            }else{
                $response = ['Mensagem'=> 'Erro ao inserir categoria.'];
            }
            echo json_encode($response);
    ?>

    <?php
        include './pagina_inicial/footer.php';
    ?>