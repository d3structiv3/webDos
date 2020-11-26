
<form action="./Controller/pagar.php" method="POST">

<h3 class="p-3">Completa tu orden</h3>
<div class="d-flex">
    <div class="col">
		<div class="card" style="width: 30rem;">
			<img class="card-img-top" src="<?php echo $item['img'];?>" alt="Pizza" >
			<div class="card-body">
				<h5 class="card-title"><?php echo $item['NombreP']; ?></h5>
				<h6><b>Tamaño : </b> <?php echo $item['NombreT']; ?></h6>		
				<p><b>Total: </b>$ <?php echo $item['Precio']; ?> MXN</p>
			</div>
			<a href="./index.php" class="btn btn-success btn-block">Regresar al menu</a>
		</div>
	</div>
    <div class="col">
	<div class="form-group ">
		<label for="fullName">Nombre completo</label>
		<input type="text" class="form-control" id="fullName" name="nombre">
	</div>
	<div class="form-group ">
		<label for="fullName">Calle</label>
		<input type="text" class="form-control" id="fullName" name="calle">
	</div>
	<div class="form-group ">
		<label for="fullName">Colonia </label>
		<input type="text" class="form-control" id="fullName" name="colonia">
	</div>
	<div class="form-group ">
		<label for="fullName">CP</label>
		<input type="text" class="form-control" id="fullName" name="cp">
	</div>
	<div class="form-group text-center">
            <label for="fullName">Metodo de pago</label>
                <div class="d-flex">
                <div class="form-check">
            <input class="form-check-input col-3" type="radio" name="tipopago" id="soltero" value="Efectivo" checked>
            <label class="form-check-label" for="">
                Efectivo
            </label>
            </div>
            <div class="ml-3 form-check">
            <input class="form-check-input col-3" type="radio" name="tipopago" id="casadp" value="Tarjeta">
            <label class="form-check-label" for="">
               Tarjeta
            </label>
			</div>
			<br>
			<input type="hidden" name="total"value="<?php echo $item['Precio']; ?>"> 
			<input type="hidden" name="pizzaId"value=" <?php echo $item['PizzaId']; ?>"> 
	
    </div>
</div>
<button type="submit"  class="btn btn-dark btn-block">Pagar</button>
</form>
