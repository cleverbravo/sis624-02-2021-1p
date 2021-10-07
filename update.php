<?php
include 'connection.php';

$command="update estudiante set nombre='juan dos',ci='1234',telf='4321' where nombre='juan'";
$result=$connection->query($command);

if($result=$connection->query($command)){
    echo "todo correcto.";
}
else{
    echo "algun error.".$connection->error;
}
?>