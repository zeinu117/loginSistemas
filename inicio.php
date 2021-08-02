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
        <div class="col text-center">
            <br>
            <h2 >Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="https://tuataras.net/wp-content/uploads/crew-dragon.jpeg" alt="" width="1100xp">
        </div>
    </div>
</div>

<?php include 'footer.php';?>
<?php
}else {
    header("location:../index.php");
}
?>