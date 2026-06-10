<?php
# declara os 3 primeiros números e deixa um disponível
$num1 = 1; $num2 = 1; $num3 = 2; $num4;

# mostra os 3 primeiros
echo $num1, " ", $num2, " ", $num3;
# repetição
for ($i = 0; $i < 7; $i++) {
    # o número disponível se torna a soma dos 3 primeiros
    $num4 = ($num1 + $num2 + $num3); 
    echo " ", $num4; # mostra o número somado 
    # os numeros pulam 1 casa para frente na sequencia
    $num1 = $num2;
    $num2 = $num3;
    $num3 = $num4;
}
?>