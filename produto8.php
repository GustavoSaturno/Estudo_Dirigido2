<?php

    print "Qual o valor do guarana Dolly?";
    $dolly= (int) fgets (STDIN);

    print "Qual o valor do guarana Jesus?";
    $jesus= (int) fgets (STDIN);

    print "Qual o valor do guarana Antartica?";
    $antartica= (int) fgets (STDIN);

    if($dolly<$jesus and $dolly<$antartica){

        print "Compre o guaraná Dolly o sabor brasileiro";

    }

    if($jesus<$dolly and $jesus<$antartica){

        print "Compre o guaraná Jesus é o mais barato";

    }

    if($antartica<$jesus and $antartica<$dolly){

        print "Compre o guaraná Antartica o melhor guaraná";

    }