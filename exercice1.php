<?php

/*
CN1 : tab [0, 1] , 0 => 0
CN2 : tab [0, 1] ,1 => 1
CN3 : tab [0, 1, 3, 6, 5], 6 =>3
CN4 : tab [0, 1, 3, 6, 5], 4 =>false

*/
function findValueInTab($tab, $value)
{
  $k = count($tab) ;
  $i = 0 ;
  while ($i < $k){
    if ($value === $tab[$i]){
      return $i ;
    }
    $i = $i + 1 ;
  } 
 
  return false;
}

function testFindValueInTab_CN1()
{
  if (findValueInTab([0, 1], 0) == 0) { 
    echo "Test de findValueInTab([0. 1], 0) : Réussi " ;
 } 
 else { echo "Test de findValueInTab([0. 1], 0) : Échec " ; 
} 
}

function testFindValueInTab_CN2()
{
  if (findValueInTab([0, 1], 1) == 1) { 
    echo "Test de findValueInTab([0. 1], 1) : Réussi " ;
 } 
 else { echo "Test de findValueInTab([0. 1], 1) : Échec " ; 
} 
}

function testFindValueInTab_CN3()
{
  if (findValueInTab([0, 1, 3, 6, 5], 6) == 3) { 
    echo "Test de findValueInTab([0, 1, 3, 6, 5], 6) : Réussi " ;
 } 
 else { echo "Test de findValueInTab([0, 1, 3, 6, 5], 6) : Échec " ; 
} 
}

function testFindValueInTab_CN4()
{
  if (findValueInTab([0, 1, 3, 6, 5], 4) == false) { 
    echo "Test de findValueInTab([0, 1, 3, 6, 5], 4) : Réussi " ;
 } 
 else { echo "Test de findValueInTab([0, 1, 3, 6, 5], 4) : Échec " ; 
} 
}
testFindValueInTab_CN1() ;
echo PHP_EOL ;

testFindValueInTab_CN2() ;
echo PHP_EOL ;

testFindValueInTab_CN3( ) ;
echo PHP_EOL ;

testFindValueInTab_CN4() ;
echo PHP_EOL ;
