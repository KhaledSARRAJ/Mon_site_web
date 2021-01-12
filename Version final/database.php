	<meta charset="utf-8"/> <!--pour lire les caractéres spéciaux<html  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  <!--pour que ton site s'adapte sur tt les appereils <html  -->
<!--creer une base de données + connecté php myadmin  -->
<?php

 define('HOST','localhost');
 define('DB_NAME','siteweb');
 define('USER','root');
 define('PASS','');

 try{
  $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Votre demande a été bien envoyé !";
 }catch(PDOEXeption $e){
  echo $e;
 }
 ?>
 