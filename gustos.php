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
        <div class="col-sm-12 text-center">
            <br>
            <h1>Mis pequeños gustos!! :D</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>videojuegos</h2>
            <img src="https://p4.wallpaperbetter.com/wallpaper/254/737/240/video-games-collage-wallpaper-preview.jpg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Anime</h2>
            <img src="http://pm1.narvii.com/7098/b2e916757f90d1b6bdf01e7298fb184b8550622fr1-2048-948v2_uhq.jpg" alt="" height="300xp" width="1000xp">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>La tecnología</h2>
            <img src="https://cdn.forbes.com.mx/2021/06/Transformacio%CC%81n-de-la-Banca-Digital-640x360.jpg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Camping</h2>
            <img src="https://cdn1.matadornetwork.com/blogs/1/2018/01/mexico-city-camping-1200x854.jpg" alt="" width="1000xp" height="400xp">
        </div>
    </div>
</div>

<?php include 'footer.php';?>
<?php
}else {
    header("location:../index.php");
}
?>