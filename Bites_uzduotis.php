<html>
<head>
<meta http-equiv=Content-Type content=text/html; charset=utf-8>
<title>Bitės atrankos užduotis</title>
</head>
<body>
<form action="Bites_uzduotis.php" method="POST">
<p><strong>Įveskite skaičių:</strong><br/>
<input type="number" name="user"></p>
<p><input type="submit" value="send"/></p>
</form>
</body>
</html>

<?php

if (isset($_POST["user"])) {
	
$suma=$_POST["user"];
// susiejama ivesta teksta su kintamuoju
$minimalus=0; // minimalus kupiuru skaicius

// panaudoju rekursija per goto
// nominalai 500, 100, 50, 20, 10, 5, 1


a: 
if ($suma>=500){
$suma=$suma-500;
$minimalus=$minimalus+1;
goto a;
}


b: 
if ($suma>=100){
$suma=$suma-100;
$minimalus=$minimalus+1;
goto b;
}

c: 
if ($suma>=50){
$suma=$suma-50;
$minimalus=$minimalus+1;
goto c;
}

d:
if ($suma>=20){
$suma=$suma-20;
$minimalus=$minimalus+1;
goto d;
}


e:
if ($suma>=10){
$suma=$suma-10;
$minimalus=$minimalus+1;
goto e;
}

f:
if ($suma>=5){
$suma=$suma-5;
$minimalus=$minimalus+1;
goto f;
}

g:
if ($suma>=1){
$suma=$suma-1;
$minimalus=$minimalus+1;
goto g;
}


echo "Minimalus kupiuru skaicius ";
echo $minimalus;

}

?>
