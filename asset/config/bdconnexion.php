<?php 
 define("DBNAME","nde_airline");
 define("DBHOST","localhost");
 define("DBUSER","root");
 define("DBPASSE","");
 define("DBFILE","csv");
 try{
     $db=new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASSE);
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
     $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8');
 }
 catch(PDOException $e){
    die("Error!: " . $e->getMessage() . "<br/>");
 }
?>