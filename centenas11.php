<?php

    print "digite um número entre 0 e 1000: \n";
    $Numero = fgets(STDIN);
    $num = $Numero;


        if ($num=3){

            $centena=($Numero/100)%100;
            $dezena= ($Numero/10)%10;
            $unidade=($Numero%100)%10;

        print "$Numero = $centena centena(s) , $dezena dezena(s) e $unidade unidade(s) ";
  
}

   