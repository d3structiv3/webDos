<?php
include '../Models/Datos.php';
$NombreCompleto = $_POST['nombre'];
$FechaNacimineto = $_POST['fechaNacimiento'];
$EstadoProcedencia = $_POST['estado'];
$CURP = $_POST['curp'];
$Edad = $_POST['edad'];
$Fecha = date("m.d.y");
$RFC = $_POST['rfc'];

$Telefono = $_POST['telefono'];
$Direccion = $_POST['direccion'];
$EstadoCivil = $_POST['estadocivil'];
$NivelEstudios = $_POST['nivelestudios'];
$Salario = $_POST['salario'];
$NSS = $_POST['nss'];
$EmpresaProcedencia = $_POST['empresa'];

$db = new webdos ();





if ($_FILES["imagen"]["error"]>0) {
    echo"Error archivo";
}else{
    $permitidos=array("image/png","image/jpeg","image/jpg");
    if (in_array($_FILES["imagen"]["type"],$permitidos)) {
        echo "Archivo permitido";
        $nom_arch=$_FILES["imagen"]["name"];
        $ruta='../img/';
        $archivo=$ruta.$_FILES["imagen"]["name"];
        $r_img='/img/'.$_FILES["imagen"]["name"];
            $resultado=@move_uploaded_file($_FILES["imagen"]["tmp_name"],$archivo);
            if ($resultado) {
                echo "Subio correctamente el archivo";
                $db->insert (
                    $NombreCompleto,$FechaNacimineto,$EstadoProcedencia,$CURP,$Edad,$Fecha,
                    $RFC,$Telefono,$r_img,$Direccion,$EstadoCivil,$NivelEstudios,$Salario,$NSS,
                        $EmpresaProcedencia
                );
            }else{
                echo "Archivo no subido";
            }
    }else{

    }
}










?>