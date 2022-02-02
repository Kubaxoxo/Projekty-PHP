<?php
require_once('mojekonto.php');
$login=$_POST['email'];
$haslo=$_POST['haslo'];
$zaloguj=$_POST['zaloguj'];
if(isset($zaloguj))
{	
$conn->select_db("logowanie");	
$zapytanie = "SELECT * FROM `users` WHERE email='$email' AND haslo='$haslo' LIMIT 1";
$result = $conn->query($zapytanie);
if($result->num_rows == 1)
{
echo 'udalo sie';
echo '<br>'.'Total results: ' . $result->num_rows;
 
}
else
{
echo 'zly login lub haslo';
 
}
 
 
}
