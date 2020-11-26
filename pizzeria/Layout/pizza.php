<div class="col-4 text-center">
	<div class="card mb-3" style="width: 18rem; height:25rem;">
		<img class="card-img-top" src="<?php echo $item['img'];?>" alt="Pizza" >
		<div class="card-body">
			<h5 class="card-title"><?php echo $item['NombreP']; ?></h5>
			<h6><?php echo $item['NombreT']; ?></h6>		
			<p>$ <?php echo $item['Precio']; ?> MXN</p>
			<a href="./caja.php?pizza=<?php echo $item['PizzaId']; ?>" class="btn btn-dark btn-block" >Comprar</a>
		</div>
	</div>
</div>