<?php

        print "Digite a primeira nota!";
        $n1= (int) fgets (STDIN);

        print "Digite a segunda nota!";
        $n2= (int) fgets (STDIN);

        $media = ($n1+$n2)/2;

        if($media<7){

            print "Reprovado";

        }

        if($media>= 7 and $media != 10){

            print "Aprovado";

        }

        if ($media==10){

            print "Aprovado com Distinção";

        }