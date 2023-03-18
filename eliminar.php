<?php
    include "./header.php"
?>
<div class="container">
  <div class="row">
    <div class="col">
        <div class="card mt-4">
            <div class="card-body">
                <a href="index.php" class="btn btn-outline-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                </a>
                <h2>Eliminar registro</h2>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="alert alert-danger" role="alert">
                    <p>¿Esta seguro de elimar este registr?</p>
                    <p>Una vez eminado este registro no se podra recuperar</p>
                </div>
                <form action="" method="post">
                <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

<?php
include "./scripts.php" 
?>