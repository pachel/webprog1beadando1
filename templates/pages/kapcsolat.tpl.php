<h1>Kapcsolat</h1>
<?php if(isset($message)):?>
<div class="text-danger"><?=$message?></div>
<?php endif;?>
<form action="" method="post">
    <div class="row mb-3">
        <div class="col">
            <?php if (isset($_SESSION["login"])): ?>
                <label>Az Ön neve (bejelentkezett felhasználó):</label>
                <input type="hidden" name="id" value="<?=$_SESSION["id"]?>">
                <input type="text" name="nev" class="form-control" value="<?= $_SESSION['csn'] . " " . $_SESSION['un'] ?>" readonly>
            <?php else: ?>
                <label>Az Ön neve:</label>
                <input type="text" name="nev" class="form-control" placeholder="Írja be a nevét">
            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label>Üzenet</label>
            <textarea class="form-control" name="szoveg" placeholder="Üzenete az oldal tulajdonosának"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="form-control btn btn-info">Elküld</button>
        </div>
    </div>
</form>