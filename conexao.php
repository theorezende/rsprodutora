<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rsprodutora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = <<<SQL
      SELECT id_usuario,usuario,perfil
      FROM usuario
SQL;

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
}

while($row = $result->fetch_assoc()){
    echo $row['id_usuario'] . '<br />';
}

$conn->close();
?>
