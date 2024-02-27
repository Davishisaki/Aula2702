<!DOCTYPE html>
<html>
<head>
    <title>Exemplo</title>
</head>
<body>
    <?php include "dados.php"; ?>
    <?php
        echo "Olá, eu souum script PHP! <br>";
        echo "O nome do site eh: $nomeSite<br>";

        echo "[for]: ";
        for ($a=0; $a<count ($nomeProdutos); $a++) {
            echo "$nomeProdutos[$a]<br>";
        }

        echo "<br> Foreach: <br>";
        foreach ($nomeProdutos as $p) {
            echo "<br> $p";
        }
    ?>
</body>
</html>