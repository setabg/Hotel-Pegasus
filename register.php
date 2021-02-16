<html>
<head>
<title>Начало</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<?php
$ardate=$_POST['ardate'];
$drdate=$_POST['drdate'];
$d1=date('d', strtotime($ardate));
$d2=date('d', strtotime($drdate));
$m1=date('m', strtotime($ardate));
$m2=date('m', strtotime($drdate));
$y1=date('y', strtotime($ardate));
$y2=date('y', strtotime($drdate));

$broy1=$_POST['room1'];
$broy2=$_POST['room2'];
$broy3=$_POST['room3'];
$suma1=120*$broy1;
$suma2=220*$broy2;
$suma3=300*$broy3;
if($m1==$m2){$d=$d2-$d1;}
if($m1==1||$m1==3||$m1==5||$m1==7||$m1==8||$m1==10||$m1==12)
  {$m=31;}
else
   {if($m1==2)
      {if(($y1%4==0 && $y1%100!=0) || ($y1%400==0))
         {$m=29;}
       else {$m=28;}
      }
   else
     {$m=30;}
   }
if(($m2-$m1==1) || ($m1==12 && $m2==1))
{$d=$m-$d1+$d2;}
$obshtasuma=($suma1+$suma2+$suma3)*$d;
setcookie("broyst1", $broy1, time()+36000);
setcookie("broyst2", $broy2, time()+36000);
setcookie("broyst3", $broy3, time()+36000);
setcookie("sumast1", $suma1, time()+36000);
setcookie("sumast2", $suma2, time()+36000);
setcookie("sumast3", $suma3, time()+36000);
setcookie("suma", $obshtasuma, time()+36000);
setcookie("d1", $ardate, time()+36000);
setcookie("d2", $drdate, time()+36000);
setcookie("n", $d, time()+36000);
if($drdate<=$ardate)
{echo "<h3>Некоректна резервация! Не сте избрали коректни дати 
на пристигане и заминаване.</h3><br>";
echo "<center>";
echo "<a href='index.php'><button>НАЗАД</button></a>";
echo "</center>";
}
else{
if(($m2-$m1>2) || ($m1==12 && ($m2!=1 && $m2!=12)))
{echo "<h3>Некоректна резервация! Превишили сте броя на възможните
 нощувки за резервация.</h3><br>";
echo "<center>";
echo "<a href='index.php'><button>НАЗАД</button></a>";
echo "</center>";
}
else{
if($broy1==0 && $broy2==0 && $broy3==0)
{echo "<h3>Некоректна резервация! Не сте избрали стая.</h3><br>";
echo "<center>";
echo "<a href='index.php'><button>НАЗАД</button></a>";
echo "</center>";
}
else
{echo "<h3>Вашата резервация е:</h3>";
if($broy1>0)
{echo "<h3>Брой стаи с едно легло: ".$broy1."</h3>";
echo "<h3>Обща сума: ".$suma1." лв.</h3>";}

if($broy2>0)
{echo "<h3>Брой стаи с две леглa: ".$broy2."</h3>";
echo "<h3>Обща сума: ".$suma2." лв.</h3>";}

if($broy3>0)
{echo "<h3>Брой апартаменти: ".$broy3."</h3>";
echo "<h3>Обща сума: ".$suma3." лв.</h3>";}


echo "<h3>Дата на пристигане: ".$ardate."</h3><br>";
echo "<h3>Ден на пристигане: ".$d1."</h3>";
echo "<h3>Месец на пристигане: ".$m1."</h3>";
echo "<h3>Година на пристигане: ".$y1."</h3><br>";

echo "<h3>Дата на заминаване: ".$drdate."</h3><br>";
echo "<h3>Ден на заминаване: ".$d2."</h3>";
echo "<h3>Месец на заминаване: ".$m2."</h3>";
echo "<h3>Година на заминаване: ".$y2."</h3><br>";

echo "<h3>Брой нощувки: ".$d."</h3><br>";

echo "<h3>Обща дължима сума: ".$obshtasuma." лв.</h3>";
echo "<br>";
echo "<center>";
echo "<a href='register1.php'><button>ПРОДЪЛЖИ РЕЗЕРВАЦИЯТА
</button></a>";
echo "</center>";
}}}
?>

</body>
</html>