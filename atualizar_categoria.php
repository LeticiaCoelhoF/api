    <main>
    <?php
        include './pagina_inicial/header.php';
    ?>

    <?php
        include 'cors_policy.php';
        include 'conexao.php';

        $nome = 'Infraestrutura';

        $sql = "UPDATE categorias SET nome = '$nome' WHERE nome = '$nome'";
        
            $result = $connection->query($sql);
            
            if($connection->query($sql) === true){
                $response = ['Mensagem'=> 'Categoria atualizada com sucesso!'];
            }else{
                $response = ['Mensagem'=> 'Erro ao atualizar categoria.'];
            }
            echo json_encode($response);
    ?>

    <?php
        include './pagina_inicial/footer.php';
    ?>
    </main>