<?php

    print "Digite um numero!";
    $n1= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n2= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n3= (int) fgets (STDIN);

    if($n1>$n2 and $n1>$n3){

        print "$n1 é o maior numero";
    
    }

    if($n2>$n1 and $n2>$n3){

        print "$n2 é o maior numero";
    
    }

    if($n3>$n2 and $n3>$n1 ){

        print "$n3 é o maior numero";
    
    }