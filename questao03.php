<?php
# define o maior numero do triangul
$numMax = 5;
# repeticao para saber o numero que sera impresso
for ($i = 1; $i <= $numMax; $i++) {
    # repeticao para colocar os espaços antes dos números
    for ($j = ($numMax - $i); $j > 0; $j--) {
        echo "&nbsp;";
    }
    # mostra os números, repetindo sua quantidade de acordo com seu valor
    for ($k = 0; $k < $i; $k++) {
        echo $i, " ";
    }
    # passa pra próxima linha
    echo "<br>";
}
?>
 