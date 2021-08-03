<?php include 'header.php'; ?>
<div class="container" style="background-color: white;">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="servidor/registros.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" require>
                <label for="apellidoPaterno">Apellido Paterno</label>
                <input type="text" name="apellidoPaterno" class="form-control" id="apellidoPaterno" require>
                <label for="apellidoMaterno">Apellido Materno</label>
                <input type="text" name="apellidoMaterno" class="form-control" id="apellidoMaterno" require>
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" required class="form-control">
                    <option value="mujer">Mujer</option>
                    <option value="hombre">Hombre</option>
                </select>
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" require>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" require>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" require  autocomplete="off">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" require  autocomplete="off">
                <br>
                <button class="btn btn-primary">Registro</button>
                <a href="index.php" class="btn btn-success">ir a login</a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php include 'footer.php'; ?>