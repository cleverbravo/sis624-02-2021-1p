<?php
include 'connection.php'

echo 'starting select.';

$command="select * from estudiante";
$result=$connection->query($command);

while($r=$result->fetch_assoc())
{
    echo "<br/>Nombre: ".$r["nombre"];
    echo "<br/>CI: ".$r["ci"];
    echo "<br/>Telf: ".$r["telf"];
    echo "<br/><br/>";
}


?>