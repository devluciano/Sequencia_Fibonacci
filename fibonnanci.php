<html>
    <head>
        <title>Frequência de Fibonnaci</title>
    </head>
    <body>
        <form action="" method="get">
            Exibir até(maior que 2): <input type="number" name="number" /><br>
            <input type="submit" name="submit" value="Calcular"/>
        </form>
        <?php
        $sequencia = $_GET['number'] ? $_GET['number'] : 0;
        $ultimo = 1;
        $penultimo = 0;

        if($sequencia == 0 || $sequencia < 0) {
            echo "Digite um valor maior que 0";
        } else if($sequencia == 1) {
            echo '0'. "<br/>";
        } else {
           echo "0 <br/> 1 <br/>";
        }

        for($i=1; $i < $sequencia - 1; $i++) {
            $atual = $ultimo + $penultimo;
            echo "${atual} <br/>";

            $penultimo = $ultimo;
            $ultimo = $atual;
        }
        ?>
    </body>
</html>
