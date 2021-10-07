<?php
include 'connection.php';

$command="insert into estudiante values('juan','1234','4321')";
if($result=$connection->query($command)){
    echo "todo correcto."
}
else{
    echo "algun error.".$connection->error;
}


?>