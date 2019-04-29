<?php

    print "Insira o valor de a ";
    $a = (int) fgets(STDIN);

    if ($a == 0) {

    print "A equação não é de segundo grau! \n";
    exit;

}

    print "Insira o valor de b ";
    $b = (int) fgets(STDIN);

    print "Insira o valor de c";
    $c = (int) fgets(STDIN);

    $delta = (pow($b,2))-(4*$a*$c);

        if ($delta<0) {

            print "Delta negativo: não possui raizes reais";
            exit;

}

        elseif ($delta==0) {

            $X = -($b)/(2*$a);

            print "O valor de delta é $delta \n";
            print "O valor de x é $X \n";

}

        elseif ($delta>0) {

            $x1 = (-($b)-sqrt($delta))/(2*$a);
            $x2 = (-($b)+sqrt($delta))/(2*$a);

            print "O valor de delta é $delta \n";
            print "O valor de x1 é $x1 \n";
            print "O valor de x2 é $x2 \n";    

}