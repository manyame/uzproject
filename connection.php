<?php
$hostname='localhost';
$username='root';
$database= 'applicant';
$password='';
try{
  $dbh=new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
//echo'Connected to database';

}catch(PDOException $e)
{  echo $e->getMessage();
}
?>

