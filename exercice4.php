<?php

/* Votre collègue vous donne la signature suivante :
FONCTION weightedMeanTab(var tab) : décimal|FAUX
Cette routine est une généralisation de la précédente.
Chaque élément du tableau tab est lui-même un tableau, contenant à l’indice 0 la valeur, et à 
l’indice 1 le coefficient à appliquer.
Exemple : 
[ [ 10, 2] , [15, 3] ] => j’ai 2 notes, un 10/20 coeff 2 et un 15/20 coeff 3
Résultat attendu : (10x2 + 15x3)/(2+3) */

function weightedMeanTab($tab)
{
  $i = 0 ;
  $resultat1 = 0 ;
  $resultat2 = 0 ;
  $resultat = 0 ;
  if (count($tab) === 0){
    echo "false" ;
    echo PHP_EOL ;
    return false ;
  }
  while ($i < count($tab)){
    $resultat1 = $resultat1 + $tab[$i][0] * $tab[$i][1] ;
    $resultat2 = $resultat2 + $tab[$i][1] ;   
    $i = $i + 1 ;
  }
  $resultat = $resultat1 / $resultat2 ;
  return $resultat ;
}


var_dump(weightedMeanTab([]) ) ;
echo PHP_EOL ;

echo weightedMeanTab([[20, 2], [10, 3],[0, 2]]);
echo PHP_EOL ;