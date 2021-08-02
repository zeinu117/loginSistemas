<?php
session_start();
if (isset($_SESSION['usuario'])) {

?>

<?php include 'header.php';?>
<div class="container" style="background-color: white;">
    <div class="row mt-4">
        <div class="col">
            <?php include 'menu.php';?>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 text-center text-justify">
            <br>
            <h1>¿Por que empece a estudiar esto?</h1>
            <br>
            <p>
            <h2 class="text-justify">Por mis gustos personales, que los podras ver <a href="gustos.php">aqui</a>, para
                lograr comprender lo que la gente normal no, el como se hacen las cosas
                y que hay detrás de ella.
            </h2>
            </p>
            <p>
            <h2 class="text-justify"> Cada vez la vida es mas facil gracias a la tecnología pero...
                alguna vez te has puesto a pensar como funcionan¿?, interesante pregunta no ?
            </h2>
            </p>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12"><img src="https://i.blogs.es/779b38/050716-horizonzerodawn/1366_2000.jpg" alt="" width="700xp" height="400xp"></div>
    </div>
</div>

<?php include 'footer.php';?>
<?php
}else {
    header("location:../index.php");
}
?>