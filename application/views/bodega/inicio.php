<div class="span9">

	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">Resumen</a></li>
	    <li><a href="#tab3" data-toggle="tab">Productos</a></li>
	    <li><a href="#tab2" data-toggle="tab">Ingreso bodega</a></li>
	    <li><a href="#tab4" data-toggle="tab">Egreso bodega</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="tab1">
	      <!-- ingreso de proyectos -->

	    </div>
	    <div class="tab-pane" id="tab2">
	      <!-- creacion de tareas -->
	      <table class="table table-striped table-condensed">
	      	<tr>
	      		<td>Fecha:</td>
	      		<td colspan="4"><?php echo date("d/m/Y h:m:s"); ?></td>
	      		<td>Codigo:</td>
	      		<td><input type="text" id="codigo"></td>
	      	</tr>
	      </table>
	      <div id="lista_productos_ingresados">
	      <table class="table table-condensed table-bordered">
			<tr>
				<td>Código</td>
				<td>Descripción</td>
				<td>Proveedor</td>
				<td>Fabricante</td>
				<td>Unidades</td>
			</tr>
	      	<?php foreach($ingresos as $i): ?>
			<tr>
				<td><?php echo $i['codigo'] ?></td>
				<td><?php echo $i['decripcion'] ?></td>
				<td><?php echo $i['proveedor'] ?></td>
				<td><?php echo $i['fabricante'] ?></td>
				<td><?php echo $i['cantidad'] ?></td>
			</tr>
	      	<?php endforeach; ?>
	      </table>

	      </div>

	    </div>
	    <div class="tab-pane" id="tab3">
	      <!-- creacion de tareas -->
			<table class="table table-condensed table-bordered">
			<tr>
				<td>Código</td>
				<td>Descripción</td>
				<td>Proveedor</td>
				<td>Fabricante</td>

			</tr>
	      	<?php foreach($productos as $p): ?>
			<tr>
				<td><?php echo $p['codigo'] ?></td>
				<td><?php echo $p['decripcion'] ?></td>
				<td><?php echo $p['proveedor'] ?></td>
				<td><?php echo $p['fabricante'] ?></td>

			</tr>
	      	<?php endforeach; ?>
	      </table>
	    </div>
	    <div class="tab-pane" id="tab4">
	      <!-- creacion de tareas -->

	    </div>
	  </div>
	</div>

</div>
</div>
</div>