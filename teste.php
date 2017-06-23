<?php

     $am1 = ['nome'=> 'Guilherme', 'idade'=> '16', 'cidade'=> 'Joinville'];
     $am2 = ['nome'=> 'Mayke',     'idade'=> '16', 'cidade'=> 'São Chico'];
     $am3 = ['nome'=> 'Gabriela',  'idade'=> '16', 'cidade'=> 'São Chico'];

     $amigos = [$am1, $am2, $am3];

     foreach ($amigos as $amigo){

         echo $amigo['nome'];
         echo "\n";
         echo $amigo['idade'];
         echo "\n";
         echo $amigo['cidade'];
         echo "\n";
         echo "\n";
         sleep(3);

     }

