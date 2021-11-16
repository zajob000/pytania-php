<?php
//1.
$test = 'Nazywam się Janek';

//2.
//integer
$wiek = 20;
//float
$proporcja = 3.14;
//string
$imie = 'Jurek';
//array 
$imiona = array('Marek','Kamil','Antek');

//3.
echo "to co ma się wyświetlić";

//4.
$ciagznakow1 = 'Olek je';
$ciagznakow2 = 'bułke';
$zdanie = $ciagznakow1 . $ciagznakow2;

echo $zdanie;

//5.
$isAuthorized = true;
$isClicked = true;
if ($isClicked=true and $isAuthorized=true){
  echo "operacja udana";
} else {
      echo "operacja nieudana";
  }

//6.
$isAuthorized1 = true;
$isClicked1 = true;
if ($isClicked1=true xor $isAuzthorized1=true){
  echo "operacja udana";
}
  else{
      echo "operacja nieudana";
  }

//7.

$wartosc = [
    'favAnimal' => 'Zebra',
    'favFood' => 'kebab',
    'favMovie' => 'Sami Swoi',
   ];
   

//8.

	foreach($wartosc as $k => $v ){
    echo $k , $v;
  }

//9.

$a="To jest test";
$b=$a[4];
echo $b;

