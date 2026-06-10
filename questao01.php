<?php
    $temp = $_POST["temp"]; # pega a temperatura do html
    # verifica em qual faixa de condição a temperatura está e mostra na tela a condiçã
    if ($temp >= 40) {echo "Risco Elevado";}
    else if ($temp < 40 && $temp >= 39) {echo "Febre Alta";}
    else if ($temp <= 38.9 && $temp >= 37.8) {echo "Febre";}
    else if ($temp <= 37.7 && $temp >= 37.3) {echo "Atenção";}
    else if ($temp <= 37.2 && $temp >= 36) {echo "Normal";}
    else if ($temp <= 35) {echo "Hiportemia";}
?>