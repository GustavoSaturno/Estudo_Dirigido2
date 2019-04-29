<?php

        print "Digite um numero!\n";
        $n1= (int) fgets (STDIN);

        print "Digite outro numero!\n";
        $n2= (int) fgets (STDIN);

        print "Digite outro numero!\n";
        $n3= (int) fgets (STDIN);

        print "-----------------------\n";

//-------------------------------------------------------
        if($n1>=$n2 and $n1>=$n3){

            print "$n1\n";
            
                if($n2>=$n3){

                    print "$n2\n";
                    print "$n3\n";
                    exit;
                }

                if($n3>=$n2){

                    print "$n3\n";
                    print "$n2\n";
                    exit;
                }
        }
//-------------------------------------------------------
        if($n2>=$n1 and $n2>=$n3){

            print "$n2\n";
            
                if($n1>=$n3){

                    print "$n1\n";
                    print "$n3\n";
                    exit;
                }

                if($n3>=$n1){

                    print "$n3\n";
                    print "$n1\n";
                    exit;
                }
        }
//-------------------------------------------------------
        if($n3>=$n1 and $n3>=$n2){

            print "$n3\n";
            
                if($n1>=$n2){

                    print "$n1\n";
                    print "$n2\n";
                    exit;
                }

                if($n2>=$n1){

                    print "$n2\n";
                    print "$n1\n";
                    exit;
                }
        }
//-------------------------------------------------------