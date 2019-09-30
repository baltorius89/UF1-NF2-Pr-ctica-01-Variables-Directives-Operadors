<?php
session_unset();
?>
<html>
 <head>
  <title>Mi web para ver anime, por favor inicie sesion<?php echo $_GET['animefav'];?></title>
 </head>
 <body>
 <form method="post" action="PaginaSecundaria.php">
   <p>Pon tu nombre de usuario: 
    <input type="text" name="user"/>
   </p>
   <p>Pon tu contrasena: 
    <input type="password" name="pass"/>
   </p>
   <p>Pon tu edad:
    <input type="date" name="edad"/>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>

<?php


echo "Bienvenido a nuestra web, ";
echo $_COOKIE["username"];
echo "! <br/>";

echo "Mi anime favorito es:  ";
echo $_GET['animefav'];
echo "! <br/>";
$animerate = 8;
echo "Mi nota para este anime es de un: ";
echo $animerate;
echo "! <br/>";

date_default_timezone_set("Spain/Barcelona");
$leapyear = date ("L");
if ($leapyear == 1) {
    echo "Es un año bisiesto, Febrero tiene 29 dias";
    echo "! <br/>";
}
else {
    echo "Aww, Lo siento compañero, Este año no es bisiesto";
}


?>
<?php
echo "<br/>";
echo $anime= $_GET['animefav'] ?? $_POST['animefav'] ?? 'ninguno';
?>

 </body>
</html>

