
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Agregar nuevo Seguro</h2>
</center>
<form action="?c=seguros&m=agregar" method="post">
  <div class="form-group">
    <label for="CodTipoSeguro">Código seguro:</label>
    <input type="text" class="form-control" id="CodTipoSeguro" name="CodTipoSeguro">
  </div>
  <div class="form-group">
    <label for="NombreSeguro">Nombre de Seguro:</label>
    <input type="text" class="form-control" id="NombreSeguro" name="NombreSeguro">
  </div>
  <div class="form-group">
    <label for="DescripcionSeguro">Descripcion Seguro:</label>
    <input type="text" class="form-control" id="DescripcionSeguro" name="DescripcionSeguro">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a id="regresar" class="btn btn-danger" role="button" href="?c=seguros&m=index">Regresar</a>
</form>
<br><br>
 </div>
</div>