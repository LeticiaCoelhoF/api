<main>
    <form class = "container" action="index.php" method="POST">
        <label for="usuario">Nome da Categoria:</label>
        <input type="text" name ="usuario"><br><br>

        <input type = "submit" name = "acao" value = "adicionar">
        <input type = "submit" name = "acao" value = "atualizar">
        <input type = "submit" name = "acao" value = "buscar">
        <input type = "submit" name = "acao" value = "remover">
    </form>
</main>

<?php
	include 'cors_policy.php';
	include 'conexao.php';

        $nome = isset($_POST['nome']) ? $_POST['nome']:null;
        $acao = isset($_POST['acao']) ? $_POST['acao']:null;

        $sql = "INSERT INTO categorias values(0, '$nome');";
    
        $result = $connection->query($sql);
        
        if($connection ->query($sql) == true){
            if($acao=="adicionar"){
                $response = ['Mensagem'=> 'Categoria inserida com sucesso!'];
            }
        }else{
            $response = ['mensagem'=> 'Erro ao inserir categoria.'];
        }
        echo json_encode($response);
?>

<!-- &nome=desenvolvimento -->