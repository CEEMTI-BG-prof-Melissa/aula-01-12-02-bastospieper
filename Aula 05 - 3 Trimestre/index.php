<html>
    <head>
        <title>Aula 05 - PHP</title>
    </head>
    <body>
        <?php
           $n1= 2;
           $n2= $_GET["x"];

           echo "Os valores são $n1 e $n2.";
           echo "<br>O valor absoluto de $n1 é " .abs($n1);
           echo "<br>O número $n2 <sup>$n1</sup> é igual a " .pow($n2, $n1);
           echo "<br> A raiz quadrada de $n2 é " .sqrt($n2);
           echo "<br> Arredondando o número $n2 fica igual a " .round($n2);
           echo "<br> Arredondando o número $n2 para cima, fica igual a " .ceil($n2);
           echo "<br> Arredondando o número $n2 para baixo, fica igual a " .floor($n2);
        ?>
    </body>
<html>
