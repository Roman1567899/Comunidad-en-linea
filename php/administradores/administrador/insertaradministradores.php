<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos/css.css">
    <title>Administrador</title>
</head>
<body>
    <div class="menuresponsive" id="menuresponsive" >
    </div>
    <!-- <header class="nomostrado mostrado" id="mostrarmenu"></header> -->
    <header class="mostrado" id="mostrarmenu">
        <nav>
            <ol class="ol">
                <li class="li"><a href="administrador.php">Inicio</a></li>
                <li><a href="#">Algo1</a></li>
                <li><a href="#">Algo2</a></li>
                <li><a href="#">Algo3</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
            </ol>
        </nav>
    </header>
    <div class="contenedor-formulario">
        <h1>Registro de administradores</h1>
        <form class="formularioadmin"action="" method="post" id="formulario">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombreadmin" id="nombre" class="inputs">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellidoadmin" id="apellido" class="inputs">
            <label for="user">Nombre usuario</label>
            <input type="text" name="useradmin" id="user" class="inputs">
            <label for="contra">Contraseña</label>
            <input type="password" name="contraadmin" id="contra" class="inputs">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccionadmin" id="direccion" class="inputs">
            <label for="numero">Número de teléfono</label>
            <input type="text" name="numeroadmin" id="numero" class="inputs">
            <label for="estado">Estado</label>
            <input type="text" name="estadoadmin" id="estado" class="inputs">
            <label for="creacion">Fecha de creación</label>
            <input type="text" name="creacionadmin" id="creacion" class="inputs">
            <label for="modificacion">Fecha de modificación</label>
            <input type="text" name="modificacionadmin" id="modificacion" class="inputs">
            <input type="submit" value="Registrar" class="input-submit">
        </form>
    </div>
</body>
</html>