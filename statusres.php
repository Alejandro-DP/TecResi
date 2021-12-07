
<?php
  require_once 'Conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/status.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
        require_once './layout.php'
        ?>
    </header>
    <div class="container">
        <div class="col-sm abs-center">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                    <th scope="col">PROYECTO</th>
                    <th scope="col">OBEJTIVO</th>
                    <th scope="col">ACTIVIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <th scope="row">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Seleccione proyecto</option>
                                    <?php
                                    
                                          
                                            $query = $conexion -> query ("SELECT * FROM projects");
                                            while ($valores = mysqli_fetch_array($query)) {
                                    
                                                echo '<option value="'.$valores['id_project'].'">'.$valores['name_project'].'</option>';
                                            }
                                    ?>
                            </select>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  
                </tbody>
            </table>
            <!-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Seleccione Proyectos</option>
                    <option value="1">Diseño y Construccion de Robot interactivo de nivel escolar</option>
                    <option value="2">Plataforma de Seguimiento de Egres</option>
                    <option value="3">Diseño de generador de energia renovable Eolico</option>
                </select>
            </div> -->
        </div>
    </div>




    
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</body>
</html>
<!-- <!DOCTYPE html>
<html>
    <head>
<meta charset="utf 8">
            <title>LoginTecnologico Campus Cancun </title>
            <link rel="stylesheet"href="CSS/status.css">
        <body>
            <title>ESTATUS DE LA RESIDENCIA</title>
        </body>
        <center>
            <h3>Nombre del Proyecto </h3>
            <form>
                Seleccione un proyecto:
                <Select>
                    <option disabled selected>Seleccione una opcion</option>
                    <option>Diseño y Construccion de Robot interactivo de nivel escolar</option>
                    <option>Plataforma de Seguimiento de Egreso</option>
                    <option>Diseño de generador de energia renovable Eolico</option>
                    <input class="botton" type="submit" value="Aceptar">
                    <input class="botton" type="submit" value="Cancelar">
                
                    
                </Select>
            </form>
        </center>
    </head>
</html> -->