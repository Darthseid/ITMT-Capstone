<?php


$db=mysql_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("users") or die(mysql_error());
echo "Connected to Database";

$name ='';
$password ='';
if(isset($_POST['registerNew'])){
// Storing form values into PHP variables
$name = $_POST['name']; // Since method=”post” in the form
$password = $_POST['password'];

}


mysql_query("INSERT INTO user_eml(Name, Password) VALUES('$name', '$password' ) ") 
or die(mysql_error());  
echo "Data Inserted!";

echo    'Thank you for submitting your details!';

?> 