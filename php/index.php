<?php
$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'amine';
$password = 'password';
$db = 'tutoseu';

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$password,);
if(!$conn) {echo "Erreur de connexion à MSSQL<br />";}
else{
        echo "Connexion à MSSQL ok<br />";
        
}

?>
