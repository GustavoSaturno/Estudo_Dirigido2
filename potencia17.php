<?php

    print "Digite um numero\n";
    $num = (int) fgets (STDIN);

    print "Digite um expoente\n";
    $expoente = (int) fgets (STDIN);

    $resultado=1;
    
    for ($i=1; $i<=$expoente; $i++){ 
        $resultado = $resultado*$num;
    }

    print "$resultado";