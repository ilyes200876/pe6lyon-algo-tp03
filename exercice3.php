<?php

/* Votre collègue vous donne la signature suivante :
FONCTION meanTab(var tab) : décimal|FAUX
Cette routine reçoit un tableau de nombres en paramètre, et 
renvoie la moyenne de ces nombres.
Elle renvoie FAUX si le tableau est vide.
Codez cette fonction en PHP */


function meanTab($tab)
{
  $i = 0 ;
  $resultat = 0 ;
  if (count($tab) === 0){
    echo "false" ;
    echo PHP_EOL ;
    return false ;
  }
  while ($i < count($tab)){
    $resultat = $resultat + $tab[$i] ;
    $i = $i + 1 ;
  }
  $resultat = $resultat / count($tab) ;
  return $resultat ;
}

var_dump([1,7,14]);
var_dump(meanTab([]) ) ;
echo PHP_EOL ;

echo meanTab([20, 10, 0]) ;
echo PHP_EOL ;
