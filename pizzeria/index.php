<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center display-2 mb-3">Pizzeria destructive</h2>
            
        <div class="row">
            <?php
 
                $response=json_decode(file_get_contents ('http://localhost/webdos/pizzeria/Api/pizzas.php'), true);
                if($response['statuscode']==200){
                    foreach($response['items'] as $item){
                        include './Layout/pizza.php';
                }
                }else{
                    //un error
                }
            ?>
        </div>
    </div>
</body>
</html>