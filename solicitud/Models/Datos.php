<?php
    include 'DataBase.php';


    class webdos {

        function insert (
            $NombreCompleto,$FechaNacimineto,$EstadoProcedencia,$CURP,$Edad,$Fecha,
            $RFC,$Telefono,$Foto,$Direccion,$EstadoCivil,$NivelEstudios,$Salario,$NSS,
            $EmpresaProcedencia
        ){
            try{
                $connection=Database::instance();
                $sql="insert into datos values('',
                '$NombreCompleto','$FechaNacimineto','$EstadoProcedencia','$CURP','$Edad','$Fecha',
                '$RFC','$Telefono','$Foto','$Direccion','$EstadoCivil','$NivelEstudios','$Salario','$NSS',
                '$EmpresaProcedencia'
                )";
                $query=$connection->prepare($sql);
                $query->execute();
                return 1;
                }catch(\PDDException $e){
                    print "Error!:".$e->getMessage();
                }
                return 0;
        }
        function get(){
            $connection=Database::instance();
            $sql="select * from datos";;
            $query=$connection->prepare($sql);
            $query->execute();
            $res=$query->fetchAll();
            $items=[];
            foreach ($res as $row) {
                $item =[
                    'NombreCompleto'       => $row['NombreCompleto'],
                    'FechaNacimineto'        => $row['FechaNacimineto'],
                    'EstadoProcedencia'     => $row['EstadoProcedencia'],
                    'CURP'  =>$row['CURP'],
                    'Edad'  =>$row['Edad'],
                    'Fecha' =>$row['Fecha'],
                    'RFC'  =>$row['RFC'],
                    'Telefono'  =>$row['Telefono'],
                    'Foto' =>$row['Foto'],
                    'Direccion'  =>$row['Direccion'],
                    'EstadoCivil'  =>$row['EstadoCivil'],
                    'NivelEstudios' =>$row['NivelEstudios'],
                    'Salario'  =>$row['Salario'],
                    'NSS' =>$row['NSS'],
                    'EmpresaProcedencia' =>$row['EmpresaProcedencia'],
                ];
                array_push($items,$item);
            }
            return $items;
        }
        
    }

?>