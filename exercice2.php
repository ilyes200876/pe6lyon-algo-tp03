<?php

/* Votre collègue vous donne la signature suivante :
FONCTION valeurMilieu(var tab) : entier|FAUX
tab est un tableau de 3 nombres entiers. La fonction doit renvoyer la valeur qui 
n’est ni le minimum, ni le maximum.
 [0 , 1, 2] => 1
 La fonction doit renvoyer false si le tableau contient moins de 3 éléments.
 Si le tableau contient plus de 3 éléments, la fonction ne traite que les 3 
premiers (les éléments suivants doivent être ignorés) */

function valeurMilieu($tab)
{
  if (count($tab) < 3){
    return false ;
    }
  if ((($tab[0] <= $tab[1]) && ($tab[1] <= $tab[2])) ||  (($tab[2] <= $tab[1]) && ($tab[1] <= $tab[0]))){
    return $tab[1] ;
  }
  if ((($tab[1] <= $tab[0]) && ($tab[0] <= $tab[2])) || (($tab[2] <= $tab[0]) && ($tab[0] <= $tab[1]))){
    return $tab[0] ;
  }
 
  if ((($tab[1] <= $tab[2]) && ($tab[2] <= $tab[0])) || (($tab[0] <= $tab[2]) && ($tab[2] <= $tab[1]))){
    return $tab[2] ;
  }
  
}
echo "La valeur moyenne est : " , valeurMilieu([0, 20, 3]) ;
echo PHP_EOL ;