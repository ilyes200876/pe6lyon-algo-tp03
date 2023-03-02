<?php

/*
CN1 : tab [0, 1] , 0 => 0
CN2 : 
CN3 : 

*/
function findValueInTab($tab, $value)
{
  return "faxe";
}

function testFindValueInTab_CN1()
{
  if (findValueInTab([0, 1], 0) == 0) { 
    echo "Test de findValueInTab([0. 1], 0) : Réussi " ;
 } 
 else { echo "Test de findValueInTab([0. 1], 0) : Échec " ; 
} 
}

testFindValueInTab_CN1() ;
echo PHP_EOL ;