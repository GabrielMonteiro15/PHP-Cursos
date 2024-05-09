<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX03</title>
</head>
<body>
        <h1>Tipos primitivos PHP</h1>
        <?php 
            // 0x = Hexadecimal 0b = binário 0 = octal
            // $num = 0x1A;
            // echo "O valor da variável é $num"

            // $v = 300;
            // //Mostra p tipo da variável
            // var_dump($v);

            // $num = 3e2; // 3 x 10**2
            // var_dump($num);
           //Força o tipo int
            $num = (int) "950";
            var_dump($num);

            $vet = [6,2,9,3,5];
            var_dump($vet);
            class Pessoa{
                private string $nome;

            }
            $p = new Pessoa;
            var_dump($p);


        ?>
</body> 
</html>