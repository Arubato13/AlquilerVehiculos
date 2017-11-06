
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle de Direccion Oficina
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Código Oficina: </strong><?php echo $this->infooficina->getAtributo('CodOficina');?></li>
				<li class="list-group-item"><strong>Nombre de Oficina: </strong><?php echo $this->infooficina->getAtributo('NombreOfi');?></li>
				<li class="list-group-item"><strong>Ciudad de Oficina: </strong><?php echo $this->infooficina->getAtributo('CiudadOfi');?></li>
				<li class="list-group-item"><strong>Nombre de Calle: </strong><?php echo $this->infooficina->getAtributo('Calle');?></li>
				<li class="list-group-item"><strong>Número de Calle: </strong><?php echo $this->infooficina->getAtributo('Numero');?></li>
				<li class="list-group-item"><strong>Código de Postal: </strong><?php echo $this->infooficina->getAtributo('CodPostal');?></li>
				<li class="list-group-item"><strong>Teléfono: </strong><?php echo $this->infooficina->getAtributo('Telefono');?></li>
			</ul>
			<a href="?c=infooficina&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
<br><br>
 </div>
</div>