<?php

    require 'includes/config/database.php';
    $db = conectarDB();

    //Autenticar Usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        /*echo "<pre>";
            var_dump($_POST);    
        echo "</pre>";*/

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL ));
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if(!$email){
            $errores[] = "El email es Obligatorio o no es Valido";
        }

        if(!$password){
            $errores[] = "El password es Obligatorio";
        }

        if(empty($errores)){
            //Revisar si el usuario exite

            $query = "SELECT * FROM usuarios WHERE email = '{$email}' ";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows){
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                //var_dump($usuario);

                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    // El usuario esta autenticado
                    session_start();

                    //Llenar el arreglo
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /BienesRaicesPHP-App/admin');

                } else {
                    $errores [] = 'El password es incorrecto';
                }

            } else {
                $errores[] = "El Usuario no Existe";
            }

        }
    }



    //Incluye el Header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>   Iniciar Sesion  </h1>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-Mail</label>
                <input type="email" name="email" placeholder="Tu Correo" id="email" >

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password" >
            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="boton boton-verde">

        </form>
    </main>

<?php
    incluirTemplate('footer');
?>