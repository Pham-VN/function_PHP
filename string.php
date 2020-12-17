<!DOCTYPE html>
<html>
<body>

<?php
function test($x, $y) 
{
	if($x == $y) {
    	return ($x+$y)*3;
    } else {
    	return ($x+$y);
    }
}
echo test(1, 2)."\n";
echo test(3, 2)."\n";
echo test(2, 2)."<br/>"; 
echo "------------------------------------";
echo "<br/>";

function test2($n,$z)
{
	return($n ==30) || ($z == 30) || ($sum == 30);
}
var_dump(test2(30,0));
var_dump(test2(25,5));
var_dump(test2(20,30));
var_dump(test2(20,25));
echo "------------------------------------";
echo "<br/>";

function new_string($str) {
	if(strlen($str) > 1) {
    	for ($i=0;$i<=strlen($str); $i++) {
           		$new = $new.substr($str,(strlen($str)-$i),1);
        }
        echo $new."<br/>";
    }
}
echo new_string("abcd");
echo new_string("xy");
echo "------------------------------------";
echo "<br/>";

function copy_string($str){
	if(strlen($str)>1){
    	for ($i=0;$i<4;$i++){
        	echo substr($str,0,2);
        }
    	echo "<br/>";
    } else {
    	echo $str;
        echo "<br/>";
    }
}
copy_string("C Sharp");
copy_string("JS");
copy_string("a");
copy_string("GHHH GHHH GHGH");
echo "------------------------------------";
echo "<br/>";

function last_char($s){
	$a = substr($s,(strlen($s)-1),1);
    echo $a.$s.$a;
}
last_char("Red");
echo "------------------------------------";
echo "<br/>";
?>

</body>
</html>
