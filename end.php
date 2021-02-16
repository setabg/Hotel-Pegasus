<html>
<head>
<title>Начало</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<?php
$br1=$_COOKIE['broyst1'];
$br2=$_COOKIE['broyst2'];
$br3=$_COOKIE['broyst3'];
$s1=$_COOKIE['sumast1'];
$s2=$_COOKIE['sumast2'];
$s3=$_COOKIE['sumast3'];
$s=$_COOKIE['suma'];
$d1=$_COOKIE['d1'];
$d2=$_COOKIE['d2'];
$n=$_COOKIE['n'];
echo "<h3>";
echo "Лични данни:<br><br>";
$name1=$_POST['name'];
$phone1=$_POST['phone'];
$email1=$_POST['email'];
$chas1=$_POST['chas'];
echo "Име и фамилия: ".$name1."<br>";
echo "Телефон: ".$phone1."<br>";
echo "Имейл: ".$email1."<br>";
echo "Час на пристигане: ".$chas1."<br><br>";
echo "Вашата резервация е:<br><br>";
if($br1>0)
{echo "Брой стаи с едно легло: ".$br1."<br>";
echo "Обща сума: ".$s1." лв.<br>";}
if($br2>0)
{echo "Брой стаи с две легла: ".$br2."<br>";
echo "Обща сума: ".$s2." лв.<br>";}
if($br3>0)
{echo "Брой апартаменти: ".$br3."<br>";
echo "Обща сума: ".$s3." лв.<br><br>";}
echo "Дата на пристигане: ".$d1."<br>";
echo "Дата на заминаване: ".$d2."<br>";
echo "Брой нощувки: ".$n."<br>";
echo "Обща дължима сума: ".$s." лв.<br>";
echo "</h3>";
echo "<center>";
echo "<input type='submit' value='ПОТВЪРДИ РЕЗЕРВАЦИЯТА' style='font-size:25px' name='potvardi'>";
echo "<h3>Резервацията Ви е приета!";
echo "</center>";
?>

</body>
</html>