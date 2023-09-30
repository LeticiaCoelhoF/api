<main>
    <?php   
        include './pagina_inicial/header.php';
    ?>
    
    <?php
        include 'cors_policy.php';
        include 'conexao.php';

            $nome = 'Infraestrutura';
            $sql = "DELETE FROM categorias WHERE nome = '$nome'";
        
            $result = $connection->query($sql);
            
            if($connection->query($sql) === true){
                $response = ['Mensagem'=> 'Categoria removida com sucesso!'];
            } else{
                $response = ['Mensagem'=> 'Erro ao remover categoria.'];
            }
            echo json_encode($response);
    ?>
    <?php
        include './pagina_inicial/footer.php';
    ?>
    </main>