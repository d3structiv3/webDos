<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4 class="text-center mt-4">Formato de solicitud</h4>
        <form action="./Controller/Solicitud.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-row">
            <div class="form-group col-md-3">
                <label for="fullName">Nombre completo</label>
                <input type="text" class="form-control" id="fullName" name="nombre">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fullName" name="fechaNacimiento">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Estado de procedencia</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="CDMX">CDMX</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Sonora">Sonora</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">CURP</label>
                <input type="text" class="form-control" name="curp">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Edad</label>
                <input type="text" class="form-control" name="edad">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">RFC</label>
                <input type="text" class="form-control" name="rfc">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Telefono</label>
                <input type="text" class="form-control" name="telefono">
            </div>
        
            <div class="form-group col-md-3">
                <label for="fullName">Direccion</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="form-group col-md-3">
            <label for="fullName">Estado civil</label>
                <div class="d-flex">
                <div class="form-check">
            <input class="form-check-input" type="radio" name="estadocivil" id="soltero" value="Soltero" checked>
            <label class="form-check-label" for="Estado Civil">
                Soltero
            </label>
            </div>
            <div class="ml-3 form-check">
            <input class="form-check-input" type="radio" name="estadocivil" id="casadp" value="Casado">
            <label class="form-check-label" for="exampleRadios2">
                Casado
            </label>
            </div>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Nivel de estudios</label>
                <select name="nivelestudios" id="nivelestudios" class="form-control">
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Preparatoria">Preparatoria</option>
                    <option value="Licenciatura">Licenciatura</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="fullName">Foto</label>
                <input type="file" name="imagen" class="form-control" required>  
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Salario</label>
                <input type="text" class="form-control" name="salario">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">NSS</label>
                <input type="text" class="form-control" name="nss">
            </div>
            <div class="form-group col-md-3">
                <label for="fullName">Empresa de prosedencia</label>
                <input type="text" class="form-control" name="empresa">
            </div>
            <div class="form-group col-md-3">
                 <input type="submit" value="Registrarme" class="mt-4 p-2 btn btn-dark "> 
            </div>
           
        </form>


        <?php
            $response=json_decode(file_get_contents ('http://localhost/webdos/solicitud/api/usuarios.php'), true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include './Layout/personas.php';
            }
            }else{
                //un error
            }
        ?>

    </div>
</body>
</html>