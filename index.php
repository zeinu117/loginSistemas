<?php include 'header.php';?>

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Logear</h5>
                    <form action="servidor/loginUsuario.php" method="POST">
                        <div class="form-floating mb-3">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="username"
                                required  autocomplete="off">
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                        <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required  autocomplete="off">
                            
                        </div>
                        <div class="d-grid mb-2">
                            <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                                >Entrar</button>
                        </div>
                        <a href="registro.php" class="">Registro</a>
                        <hr class="my-4">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>