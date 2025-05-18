<?php
    require '../../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth){
        header('Location: /BienesRaicesPHP-App/');
    }

    // Para conectar base de Datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query ($db, $consulta);

    //var_dump($db);

    //Mensajes de Errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    //Ejecutar codigo despues de enviar el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";*/

        $titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
        $precio = mysqli_real_escape_string( $db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string( $db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string( $db, $_POST['vendedor']);
        $creado = date("Y/m/d");

        //Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if (!$titulo){
            $errores[] = "Debes añadir un Titulo";
        }

        if (!$precio){
            $errores[] = "El Precio es Obligatorio";
        }


        if ( strlen($descripcion) < 50){
            $errores[] = "Descripcion es Obligatoria y debe tener al menos 50 caracteres";
        }

        
        if (!$habitaciones){
            $errores[] = "El Numero de Habitaciones es Obligatorio";
        }

        if (!$wc){
            $errores[] = "El Numero de Sanitarios es Obligatorio";
        }

        if (!$estacionamiento){
            $errores[] = "El Numero de Establecimiento es Obligatorio";
        }

        if (!$vendedorId){
            $errores[] = "Debes seleccionar un Vendedor";
        }

        if (!$imagen['name'] || $imagen['error'] ){
            $errores[] = "Se requiere una Imagen";
        }

        $medida = 1000*1000;

        if($imagen['size']> $medida){
            $errores[] = 'La Imagen es muy pesada';
        }

        //echo "<pre>";
        //var_dump($errores);
        //echo "</pre>";

        //exit;

        //Revisar que el array este vacio

        if(empty($errores)) {
            // Subida de Archivos

            //Crear Carpeta
            $carpetaImagenes = "../../imagenes/"; 

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            //Generar nombres
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";


            //Mover las Imagenes a la carpeta
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

            //Insertar datos en la Base 
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_Id) 
                VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
            
                //echo $query;
            
            $resultado = mysqli_query($db, $query);
        
            if ($resultado) {
                //echo "Insertado Correctamente";

                header("Location: /BienesRaicesPHP-App/admin?resultado=1");
            }
        }
    }


    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="../" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="../propiedades/crear.php" enctype="multipart/form-data"> 
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">--Selecciona un Vendedor--</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?>  value="<?php echo $vendedor ['id']; ?>"> <?php echo $vendedor ['nombre'] . " " . $vendedor ['apellido']; ?> </option>
                    <?php endwhile; ?>*/
                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>

<?php
    incluirTemplate('footer');
?>