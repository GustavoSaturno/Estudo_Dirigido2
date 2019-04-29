<?php

    print "Digite um numero!";
    $n1= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n2= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n3= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n4= (int) fgets (STDIN);

    print "Digite outro numero!";
    $n5= (int) fgets (STDIN);

    if($n1>$n2 and $n1>$n3 and $n1>$n4 and $n1>$n5){

        print "$n1 é o maior numero";
    
    }

    if($n2>$n1 and $n2>$n3 and $n2>$n4 and $n2>$n5){

        print "$n2 é o maior numero";
    
    }

    if($n3>$n2 and $n3>$n1 and $n3>$n4 and $n3>$n5){

        print "$n3 é o maior numero";
    
    }

    if($n4>$n2 and $n4>$n3 and $n4>$n1 and $n4>$n5){

        print "$n4 é o maior numero";
    
    }

    if($n5>$n2 and $n5>$n3 and $n5>$n4 and $n5>$n1){

        print "$n5 é o maior numero";
    
    }