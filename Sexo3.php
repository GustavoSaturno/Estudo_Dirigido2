<?php

        print "Qual o seu sexo?F/M\n";
        $sexo= (string) fgetc (STDIN);

        $F='F';
        $M='M';

        if($sexo==$F){

            print "Mulher";

        }

        if($sexo==$M){

            print "Homem";

        }

        if($sexo!=$M and $sexo!=$F){

            print "Sexo invalido!";

        }