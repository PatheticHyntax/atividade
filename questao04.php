<?php
    #função para buscar o número
    function buscarNum($num) {
        # vetor que será buscado
        $v = [3, 5, 7, 2, 8, 10, 4, 6, 1, 9];
        # repetição para buscar o número
        for ($i = 0; $i < 10; $i++) {
            # verifica se o número no indice i é o número que está sendo buscado
            if ($v[$i] == $num) {
                # se for mostra a posição (o indice é i e a posição é onde está localizado)
                return $i + 1;
            }
        }
        return -1; # se não achar retorna -1
    }
    echo buscarNum(10); # chama a função no echo
?>