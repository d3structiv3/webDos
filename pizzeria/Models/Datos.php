<?php
    include 'DataBase.php';


    class webdos {

        function insert (
            $total,$calle,$colonia,$cp,$metodo_pago,$PizzaId,$nombrecliente
        ){
            try{
                $connection=Database::instance();
                $sql="insert into venta values('',
                 '$total','$calle','$colonia','$cp','$metodo_pago','$PizzaId','$nombrecliente'
                )";
                $query=$connection->prepare($sql);
                $query->execute();
                return 1;
                }catch(\PDDException $e){
                    print "Error!:".$e->getMessage();
                }
                return 0;
        }

        function getPizzas(){
            $connection=Database::instance();
            $sql="SELECT * FROM pizzas p INNER JOIN tamanios t ON p.TamanioId = t.TamanioId";;
            $query=$connection->prepare($sql);
            $query->execute();
            $res=$query->fetchAll();
            $items=[];
            foreach ($res as $row) {
                $item =[
                    'PizzaId'       => $row['PizzaId'],
                    'NombreP'       => $row['pizzanombre'],
                    'Precio'        => $row['precio'],
                    'img'     => $row['img'],
                    'NombreT'  =>$row['nombre'],
                ];
                array_push($items,$item);
            }
            return $items;
        }
        function getPizzasById($id){
            $connection=Database::instance();
            $sql="SELECT * FROM pizzas p INNER JOIN tamanios t ON p.TamanioId = t.TamanioId WHERE p.PizzaId = $id";;
            $query=$connection->prepare($sql);
            $query->execute();
            $res=$query->fetchAll();
            $items=[];
            foreach ($res as $row) {
                $item =[
                    'PizzaId'       => $row['PizzaId'],
                    'NombreP'       => $row['pizzanombre'],
                    'Precio'        => $row['precio'],
                    'img'     => $row['img'],
                    'NombreT'  =>$row['nombre'],
                ];
                array_push($items,$item);
            }
            return $items;
        }
        
    }

?>