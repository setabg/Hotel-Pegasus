<!DOCTYPE html>
<html>
<head>
<title>Hotel Pegasus</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
echo "<form method='post' action='register.php'>";
echo "<table bgcolor='#0C0B10' align='center' width='100%'>";
echo "<tr >";
echo"<td align='center'>";
echo"<h3>info@pegasus.com</h3>";
echo"<h3>+359888333666</h3>";
echo"</td>";
echo "<td align='center'><img src='pictures/new.png' width='150' height='100'></td>";
echo"<td align='center'>";
date_default_timezone_set("Europe/Sofia");
echo"<h3>Дата: ".date("d.m.yy")."г. </h3>";
echo"<h3>Час: ".date("h:i")."</h3>";
echo"</td>";
echo "</tr>";
echo "</table>";
echo"<img src='pictures/main.jpg' width='827' height='300' align='center'>";
echo "<table align='center' >";
echo"<tr>";
echo"<td align='center'>";
echo"<img src='pictures/room1.jpg' id='room1' width='250' height='200'>";
echo"</td>";
echo"<td align='center'>";
echo"<img src='pictures/room2.jpg' id='room2' width='250' height='200'>";
echo"</td>";
echo"<td align='center'>";
echo"<img src='pictures/room3.jpg' id='room3' width='250' height='200'>";
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";
echo"<h2>Единична стая</h2>";
echo"<br>";
echo"Цена: 120лв.";
echo"<br>";
echo "<p> Брой:
<select name='room1'>
<option> 0 </option>
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
</select>
</p>";
echo"</td>";
echo"<td>";
echo"<h2>Двойна стая</h2>";
echo"<br>";
echo"Цена: 220лв.";
echo"<br>";
echo"Брой: ";
echo "<p> Брой:
<select name='room2'>
<option> 0 </option>
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
</select>
</p>";
echo"</td>";
echo"<td>";
echo"<h2>Апартамент</h2>";
echo"<br>";
echo"Цена: 300лв.";
echo"<br>";
echo"Брой: ";
echo "<p> Брой:
<select name='room3'>
<option> 0 </option>
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
</select>
</p>";
echo"</td>";
echo"</tr>";
echo"</table>";
echo"<br>";
echo"<br>";
echo "<br>";
echo "<table>";
echo "<tr>";
echo "<td colspan='2'><h3>Изберете дата на пристигане
<input type='date' name='ardate' 
min='2020-11-01' max='2021-12-31'></h3>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2'>";
echo "<h3>Изберете дата на заминаване
<input type='date' name='drdate'
min='2020-11-01' max='2021-12-31'></h3>";
echo "</h2></td></tr>";
echo "</table>";
echo "<center>";
echo "<br>";
echo "<br>";
echo "<a href='register.php'><button>РЕЗЕРВИРАЙ</button></a>";
echo "</form>";
echo "</center>";
?>

</body>
</html>