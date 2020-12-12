

<?php
function helloWorld(){
    return "Hello World!"; 
  }
  echo helloWorld();
  echo "<br/>";
  
function quiEstLeMeilleurProf() {
	return "Le prof de programmation Web"; 
 }
 echo quiEstLeMeilleurProf();
 echo "<br/>";

function jeRetourneMonArgument($x) {
	return $x;
}
$x = "abc";
echo jeRetourneMonArgument($x);
 echo "<br/>";

function  concatenation($z,$y){
	return $z.$y;
}
$z = "Antoine";
$y = "Griezmann";
echo concatenation($z,$y);
 echo "<br/>";
 
function concatenationAvecEspace($z,$y) {
	return $z." ".$y;
}
$z = "Ngolo";
$y = " Kante";

echo concatenationAvecEspace($z,$y);
 echo "<br/>";

function somme($a,$b){
	return $a + $b;
}
$a = 5;
$b = 5;
echo  somme($a,$b);
echo "<br/>";

function estIlMajeure($age){
	if ($age >= 18) {
    	return "True";
    } else {
    	return "False";
    }
}
$age = 19;
echo estIlMajeure($age);
echo "<br/>";

function plusPetit($a,$b,$c){
	if($a < $b && $a < $c) {
   		return $a;
    } elseif ($b < $c )  {
    	return $b;
    } else {
    	return $c;
    }
}  
$a = 0;
$b = -1;
$c = 1;
echo plusPetit($a,$b,$c);
echo "<br/>";

function premierElementTableau($array) {
	if(sizeof($array) != 0) {
    	echo($array[0]);
    } else {
    	echo "null";
    }
}
$array=[3,5,6,7,8,9];
$array3=[];
premierElementTableau($array3);
echo "</br>";

function dernierElementTableau($array){
	if(sizeof($array) != 0) {
    	echo(end($array));// get last element of array
    } else {
    	echo "null";
    }
}
$array2=[3,5,6,7,8,9];
dernierElementTableau($array2);
echo "</br>";


function dernierElementTableau2($array){
	if(sizeof($array) != 0) {
    	echo($array[count($array)-1]);// get last element of array
    } else {
    	echo "null";
    }
}
$array2=[3,5,6,7,8,9];
//dernierElementTableau2($array2);

echo "plus grand: "." ";
function plusGrand($array) {
	$x = $array[0];
    for ($i = 0; $i < count($array); $i++) {
    	if($array[$i] > $x){
        	$x = $array[$i];
        }
    }
    echo $x;
}
$array2=[3,5,6,7,8,9];
//plusGrand($array2);

/*function plusGrand2($array2) {
	echo (max($array2));
}
$array2=[3,5,6,7,8,9];
plusGrand2($array2);
*/
echo "plus petit: "." ";
function Petit($array2) {
	echo (min($array2));
}
$array2=[3,5,6,7,8,9];
Petit($array2);


echo "<br/>";
function verificationPassword($a) {
    if(count($a) <= 8) {
        echo "true";
    } else {
        echo "false";
    }
}
$a = ["yeu li yeu nhieu"];
verificationPassword($a);
?> 
