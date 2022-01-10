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
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputNombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="inputNombre">
            </div>
            <div class="col-md-6">
                <label for="inputApellido" class="form-label">Apellido</label>
                <input type="Apellido" class="form-control" id="inputApellido">
            </div>
            <div class="col-12">
                <label for="inputControl" class="form-label">No.Control</label>
                <input type="number" class="form-control" id="inputControl" >
            </div>
            <div class="col-12">
                <label for="inputNaciemiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="inputNaciemiento" >
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>



        
    </body>
</html>
