<?php

        print "digite uma letra\n";
        $letra = (string) fgetc (STDIN);

        if(is_numeric($letra) ){

            print "Caractere invalido";
            exit;
            
        }
    

        if($letra == 'a' or $letra == 'e' or $letra == 'i' or $letra == 'o' or $letra == 'u'){

            print "Vogal";

        }

        else{

            print "Consoante";

        }