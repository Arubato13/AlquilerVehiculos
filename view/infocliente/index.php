
   
<div class="container-fluid">
  <div class="col-md-8 col-md-offset-2">
    <br><br><br><br><br>
  <?php $result = $this->infocliente->listar(); ?>
      <h2>Listado de Cliente</h2>   
      <a href="?c=infocliente&m=agregar"  class="btn btn-primary" role="button">Registrar</a>
     <br>
     <br>   
      <?php if ($result->num_rows): ?>
        <table class="display table table-bordered" id="grilla-Clientes">
          <thead>
            <tr>
              <th>Cédula</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Edad</th>
              <th style="width: 120px;">Más</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_array($result)):?>
              <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><div class="dropdown">
                  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li>
                          <a href="?c=infocliente&m=editar&id=<?php echo $row[0]; ?>">
                          <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                      </li>
                      <li>
                        <a href="?c=infocliente&m=eliminar&id=<?php echo $row[0]; ?>" id="eliminar">
                         <span  class="glyphicon glyphicon-trash"></span> Eliminar</a>
                      </li>
                       <li>
                        <a href="?c=infocliente&m=ver&id=<?php echo $row[0]; ?>">
                         <span class="glyphicon glyphicon-eye-open"></span> ver</a>
                      </li>
                    </ul>
                  </div></td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <div style="background-color:#b2ff59" class="alert alert-info">
                <center>
                  <strong>¡Información!</strong> No hay información.
                </center>
              </div>
            <?php endif; ?>
          </tbody>
        </table>
    <br><br>
  </div>
</div>