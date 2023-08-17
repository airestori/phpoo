<?php
$severname = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro_phpoo_turmaB";

$conn = new mysqli($severname, $username, $password, $databasename);

if (!$conn)
{
    die("conexao falhou".mysqli_connect_error());
}
else
{
    echo"conectou";
}
?>