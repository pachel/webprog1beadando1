<h1>Képek</h1>
<?php
if (!empty($errormessage)) {
    echo "<div class='text-danger'>" . $errormessage . "</div>";
}
foreach ($kepek as $kep) {
    ?>
    <a href="<?= $kep["kep"] ?>" target="_blank">
        <img src="<?= $kep["kicsi"] ?>" class="img-thumbnail">
    </a>
<?php } ?>
<?php if(isset($_SESSION["login"])):?>
<h2>Új képek feltöltése</h2>
<form class="row" action="" method="post" enctype="multipart/form-data">
    <div class="col-sm-8">
        <input type="file" name="kepek" class="form-control">
    </div>
    <div class="col-sm-4">
        <button type="submit" class="form-control btn btn-success">Feltöltés</button>
    </div>
</form>

<?php endif;