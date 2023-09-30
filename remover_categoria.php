    <?php   
        include './pagina_inicial/header.php';
    ?>
     <main>
        <form class = "container" action="index.php" method="GET">
            <label for="./pagina_inicial/index.php ">Nome da Categoria:</label>
            <input type="text" name ="nome"><br><br>

            <input type = "submit" name = "acao" value = "adicionar">
            <input type = "submit" name = "acao" value = "atualizar">
            <input type = "submit" name = "acao" value = "buscar">
            <input type = "submit" name = "acao" value = "remover">
        </form>
    </main>
    <?php
        include 'cors_policy.php';
        include 'conexao.php';

            $nome = 'Infraestrutura';
            $sql = "DELETE FROM categorias WHERE id ='$id'";
        
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