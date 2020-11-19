<div class="container">
    <h4>Listado de personas</h4>
<div class="card" style="width: 20rem;">
  <img src="<?php echo '.'.$item['Foto'];?>" class="card-img-top" alt="..." width="100" height="100">
  <div class="card-body text-center">
    <p>
        <?php 
        echo '<b>Nombre: </b>'.$item['NombreCompleto'];
        echo '<br>';
        echo '<b>Fecha de naciemiento: </b>'.$item['FechaNacimineto'];
        echo '<br>';
        echo '<b>Estado de prosedencia: </b>'.$item['EstadoProcedencia'];
        echo '<br>';
        echo '<b>Edad: </b>'.$item['Edad'];
        echo '<br>';
        echo '<b>RFC: </b>'.$item['RFC'];
        echo '<br>';
        echo '<b>Telefono: </b>'.$item['Telefono'];
        echo '<br>';
        echo '<b>Direccion: </b>'.$item['Direccion'];
        echo '<br>';
        echo '<b>Estado Civil: </b>'.$item['EstadoCivil'];
        echo '<br>';
        echo '<b>Nivel de Estudios: </b>'.$item['NivelEstudios'];
        echo '<br>';
        echo '<b>Salario: </b>'.'$'.$item['Salario'];
        echo '<br>';
        echo '<b>NSS: </b>'.$item['NSS'];
        echo '<br>';
        echo '<b>Empresa de Procedencia: </b>'.$item['EmpresaProcedencia'];
        echo '<br>';

        ?>
    </p>


  </div>
</div>
</div>