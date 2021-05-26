<?php
 $serverName = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'listadecasamento';

 $conn = mysqli_connect($serverName, $username, $password, $dbname);

 if(!$conn) {
     die('Conexão falhou!'.mysqli_connect_error());
 }

?>