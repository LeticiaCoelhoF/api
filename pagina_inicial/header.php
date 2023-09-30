<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <style>
        *{
            margin: 0;
            box-sizing: border-box;
        }

        main{
            height: 75vh;
        }

        nav{
            height: 15vh;
        }

        footer{
            height: 10vh;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">Categoria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="./adicionar_categoria.php">Adicionar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./atualizar_categoria.php">Atualizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./buscar_categoria.php">Buscar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./remover_categoria.php">Remover</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>
