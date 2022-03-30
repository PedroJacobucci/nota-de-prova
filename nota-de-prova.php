<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7 de PHP</title>

    <link rel="stylesheet" href="style8.css">

</head>
<body bgcolor="#DEB887">
    <div id="primeiro">
    <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
    <form action="" method="GET">
         <input type="number" placeholder="Digite a nota da P1" name="valor1">
         <input type="number" placeholder="Digite a nota da P2 " name="valor2">
         <input type="number" placeholder="Digite a nota da AT" name="valor3">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if($_GET){
            $p1 = $_GET['valor1'];
            $p2 = $_GET['valor2'];
            $at = $_GET['valor3'];
            
            $total = $p1 + $p2 + $at;

            if($total > 12){
                echo "<p>PASSOU</p>";
            }else {
                echo "<p>REPROVOU</p>";
            }
        }
    ?>
    </div>
</body>
</html>