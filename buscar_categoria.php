    <?php
        include './pagina_inicial/header.php';
    ?>

    <?php
        include 'cors_policy.php';
        include 'conexao.php';

            $nome = 'Infraestrutura';
            $sql = "SELECT * FROM categorias WHERE nome = '$nome'";
            
            $result = $connection->query($sql);
            
            if($connection->query($sql) === true){
                $response = ['Mensagem'=> 'Categorias buscadas com sucesso!'];
            }else{
                $response = ['Mensagem'=> 'Erro ao buscar categorias.'];
            }
            echo json_encode($response);
    ?>
    <?php
        include './pagina_inicial/footer.php';
    ?>