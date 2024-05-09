<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
            <h1>Resultado do processamento</h1>
        </header>
        <main>
            <?php 
                //var_dump($_GET); $_GET, $_POST, $_COOKIES $_REQUEST
                
                //Armazena o dado do input usando o method do form
                $nome = $_GET["nome"] ?? "Sem nome"; //?? "" Funcina quando não tiver uma entrada, no casa ele coloca "Sem nome" na variavel $nome pq não recebeu nada do form 
                $sobnome = $_GET["sobnome"] ?? "Desconhecido";
                echo "<p> É um prazer<strong> $nome $sobnome</strong> </p>";
                ?>
                <a href="javascript:history.go(-1)">Voltar</a>
        </main>
</body>
</html>