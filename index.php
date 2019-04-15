<?php

$input = $_GET["nItems"]; //Prendo numero dalla Query
$somma = 0; //Inizializzo base per somma
$max = 0;
$arr = []; //Inizializzo Array vuoto.


# INIZIO ciclo per inserire "$input" numeri random nell'array.
for ($i=0; $i < $input; $i++) {

  $rand = rand(1,100);    //Genero numero Random
  $arr[] = $rand;         //Pusho Numero Random
  $somma += $rand;        //Faccio la somma

// Se il numero generato è maggiore della base: sostituisci.
if ($rand > $max) {
  $max = $rand;
}

}

var_dump($arr);
echo "<br>";
var_dump($somma);
echo "<br>";
var_dump($max);
 ?>
