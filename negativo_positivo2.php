<?php

print "Digite um numero!";
$n1= (int) fgets (STDIN);

if($n1==0){

    print "$n1 é nulo";

}

if($n1>=1){

    print "$n1 é positivo";

}

if($n1<=-1){

    print "$n1 é negativo";

}
