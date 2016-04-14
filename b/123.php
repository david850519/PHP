
<?php
function add($a,$b){
	echo $a+$b;
}
function less($a,$b){
	echo $a-$b;
}
function Multiply($a,$b){
	echo $a*$b;
}
function except($a,$b){
	echo $a/$b;
}

$R1=$_POST['R1']; 
$a=$_POST['a']; 
$b=$_POST['b'];
$x=$_POST['x'];
$y=$_POST['y'];
if($R1!=null&&$a!=null&&$b!=null){
switch ($R1){ 
case "+": 
add($a,$b);
break; 
case "-": 
less($a,$b);
break; 
case "*": 
Multiply($a,$b); 
break; 
case "/": 
except($a,$b);
break; 
default; 

}
}
if($x!=null&&$y!=null){
echo pow($x,$y);
} 
?> 