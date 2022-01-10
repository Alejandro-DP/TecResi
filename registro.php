<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width device-width,initial-scale=1.0">
        <meta http-equiv="X-UA Compatible" content="ie-edge">
        <link rel="stylesheet" href="registro.css">
        <title>Formulario de registro</title>
    </head>
    <body>
    <header>
        <?php
        require_once './layout.php'
        ?>
    </header>
        <!-- <section class="form-register">
            <h4>Registro</h4>
            <input class="controls" type="text" name="nombre" id="nombre"placeholder="Ingrese su nombre">
            <input class="controls" type="text" name="apellido" id="apellido"placeholder="Ingrese su Apellido">
            <input class="controls" type="text" name="escuela" id="escuela"placeholder="Ingrese nombre de escuela">
            <input class="controls" type="number" name="numero de Control" id="numero de Control"placeholder="Ingrese su N Control">
            <input class="controls" type="password" name="password" id="password"placeholder="Ingrese su contraseña">
            <input class="controls" type="date" name="date" id="password"placeholder="Ingrese su Fecha de nacimiento">
            <input class="controls" type="text" name="Ciudad" id="Ciudad"placeholder="Ingrese su Ciudad">
            <input class="controls" type="text" name="RFC" id="RFC"placeholder="Ingrese su RFC">
            <input class="controls" type="tel" name="Telefono" id="RFC"placeholder="Ingrese su Telefono">  
            <input class="controls" type="text" name="Modalidad" id="Modalidad"placeholder="Ingrese su Modalidad">
            <input class="controls" type="text" name="Mecanismo" id="Mecanismo"placeholder="Ingrese su Mecanismo">
            <input class="c" type="submit" value="Registrar">
            <p><a href="#">Ya tienes una Cuenta?</a></p>

        </section> -->
    <div class="container form-register">
        <form class="row g-3 " action="Conexion/registrov.php" method="get">
            <div class="col-md-6">
                <label for="inputNombre" class="form-label">nombre</label>
                <input type="text" class="form-control" name="inputNombre">
            </div>
            <div class="col-md-6">
                <label for="inputApellido" class="form-label">Apellido</label>
                <input type="Apellido" class="form-control" name="inputApellido">
            </div>
            <div class="col-md-6">
                <label for="inputControl" class="form-label">No.Control</label>
                <input type="text" class="form-control" name="inputControl" >
            </div>
            <div class="col-md-6">
                <label for="inputNaciemiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="inputNaciemiento" >
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="inputCity">
            </div>
            <div class="col-md-6">
                <label for="inputRfc" class="form-label">RFC</label>
                <input type="text" class="form-control" name="inputRfc">
            </div>
            <div class="col-md-6">
                <label for="inputRfc" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="inputRfc">
            </div>
            <div class="col-md-6">
                <label for="inputRfc" class="form-label">Modalidad</label>
                <input type="text" class="form-control" name="inputRfc">
            </div>
            <div class="col-md-6">
                <label for="inputRfc" class="form-label">Mecanismo</label>
                <input type="text" class="form-control" name="inputRfc">
            </div>
            
           
            <div class="col-12">
                <button type="submit" class="btn btn-primary c">Registrar</button>
            </div>
        </form>
    </div>



        
    </body>
</html>
