<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf 8">
            <title>LoginTecnologico Campus Cancun </title>
            <link rel="stylesheet"href="css/login.css">

        </head>
        <div class="login">
            <img class="avatar"src="img/2.jpg" alt="Logo de TECNM">
            <h1>Inicio</h1>
            <form method="post" action="Conexion/validacion.php">
                <label for="Usuario">Usuario</label>
                <input type="text" placeholder="Usuario" name="usuario">

                <label for="password">Clave</label>
                <input type="password" placeholder="password" name="pass">

                <input class="btn" type="submit" value="Inicio de Sesion" >
                <a href="#">"No has podido iniciar sesion"</a>
                <br>
                <a href="#">"Olvidaste tu password?"</a>
                
            </form>
           
        </div>
    </html>