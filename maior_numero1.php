<?php

    print "Digite um numero!";
    $n1= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n2= (int) fgets (STDIN);

    if($n1>$n2){

        print "$n1 é o maior numero";
    
    }

    else{

        print "$n2 é o maior numero";

    }