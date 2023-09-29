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

        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $nome = isset($_POST['nome']) ? $_POST['nome']:null;
        $acao = isset($_POST['acao']) ? $_POST['acao']:null;

        $sql = "UPDATE categorias SET nome = '$nome' WHERE id = '$id'";
        
            $result = $connection->query($sql);
            
            if($connection->query($sql) === true || $acao = "atualizar"){
                $response = ['Mensagem'=> 'Categoria atualizada com sucesso!'];
            }else{
                $response = ['Mensagem'=> 'Erro ao atualizar categoria.'];
            }
            echo json_encode($response);
    ?>

    <?php
        include './pagina_inicial/footer.php';
    ?>

<!-- &nome=desenvolvimento -->