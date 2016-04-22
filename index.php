<?php
echo 'Równanie Kwadratowe';
//echo '<br />';
//echo '<hr/>';
echo '<hr/>';



$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

$Delta=(($b)*($b))-(4*$a*$c);

$x0=(-$b)/(2*$a);
$x1=(-$b+sqrt($Delta))/(2*$a);
$x2=(-$b-sqrt($Delta))/(2*$a);

$p=(-$b)/(2*$a);	
$q=(-$Delta)/(4*$a);


switch ('Instrukcja'){
	
	case (!isset($_POST['a'])AND !isset($_POST['b'])AND !isset($_POST['c'])):
	echo  'Brak Danych';
	break;
	
	
	case($Delta==$x0):
	echo '<br/>Delta jest równa 0 i posiada jedno rozwiązanie, x0= '.$x0.'';
	echo '<br/>Współrzędne wierzchołka na osi X,gdy Delta wynosi 0 to P='.$p.'';
	echo '<br/>Współrzędne wierzchołka na osi Y,gdy Delta wynosi 0 to Q='.$q.'';
	break;
	
	
	case ($Delta>0):
	echo '<br/> Posiada dwa rozwiązania , x1= '.$x1.'   x2=  '.$x2.'';
	echo '<br/> Delta wynosi '.$Delta.'';
	echo '<br/>Współrzędne wierzchołka na osi X, to P='.$p.'';
	echo '<br/>Współrzędne wierzchołka na osi Y, to Q='.$q.'';
	break;
	
	
	case  ($Delta<0) :
	echo 'Delta jest ujemna, nie ma rozwiązania ';
	break;	
	
	
	
	
	

}



	
	
	

//echo '<hr/>';
//echo '<hr/>';


?>

<html>

<head>
<title>Funkcja Kwadratowa</title>

<meta charset='utf-8' />
</head>
<body>
<form action='index.php' method='POST'>
<input type='a' name='a'>x<sup>2</sup>+
<input type='b' name='b'>x+
<input type='c' name='c'>=y
<br>
<input type='submit' value='Oblicz'>
<input type='reset' value='Wyczyść'>

<hr/>

</body>
</html>
