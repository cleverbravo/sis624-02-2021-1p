<?php
echo "begin.";
$host=getenv("MYSQL_HOST");
$username=getenv("MYSQL_USERNAME");
$password=getenv("MYSQL_PASSWORD");
$db=getenv("MYSQL_DB");
echo "trying to connect.";
$connection=mysqli_connect($host,$username,$password,$db);
if($connection->connect_errno)
{
    die('Error connecting to database.'.mysql_error());
}

echo "Success!";
?>