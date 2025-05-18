<?php

// importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//crear un mail y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);


//query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ( '{$email}', '{$passwordHash}')";

//echo $query;


//Agregar en la base de datos
mysqli_query($db, $query);