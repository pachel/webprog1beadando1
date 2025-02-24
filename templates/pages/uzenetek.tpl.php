<h1>Üzenetek</h1>
<?php
if(isset($uzenetek) && !empty($uzenetek)){
    foreach ($uzenetek AS $uzenet){
        ?>
        <div class="card mb-3">
            <h5 class="card-header">
                <?=$uzenet["nev"]?>
                <div class="float-end fs-6 fw-normal">
                    <i class="fa-solid fa-calendar-days"></i>
                    <?=$uzenet["datum"]?>
                </div>
            </h5>
            <div class="card-body">
                <p class="card-text"><?=$uzenet["szoveg"]?></p>
            </div>
        </div>
<?php
    }
}
