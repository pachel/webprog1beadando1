<?php

use Gumlet\ImageResize;

try {
    if (!is_dir(IMG_DIR)) {
        mkdir(IMG_DIR);
    }

    if(isset($_FILES["kepek"]) && !empty($_FILES["kepek"]) && isset($_SESSION["login"])){
        foreach ($_FILES AS $kep){
            if(preg_match("/\.[a-z]+$/i",$kep["name"],$preg)) {
                if(!preg_match("/image/i",$kep["type"])) {
                    throw new Exception("Nem képformátum!");
                }
                $nagy = md5($kep["tmp_name"]).$preg[0];
                copy($kep["tmp_name"], IMG_DIR.$nagy);
            }
            else{
                throw new Exception("Nincs kiterjesztése a fájlnak!");
            }
        }
    }
    $fajlok = scandir(IMG_DIR);
    $kepek = [];
    foreach ($fajlok AS $fajl){
        if($fajl == "." || $fajl == ".." || preg_match("/^sm_/",$fajl)){
            continue;
        }
        $mime = mime_content_type(IMG_DIR.$fajl);
        if(!preg_match("/image/",$mime)){
            continue;
        }
        $kicsi = meretez($fajl);
        $kepek[] = [
            "kep"=>IMG_SORT_DIR.$fajl,
            "kicsi"=>IMG_SORT_DIR.$kicsi,
        ];
    }
}
catch (Exception $e){
    $errormessage = "Hiba: ".$e->getMessage();
}
function meretez($nagy)
{
    $kicsi = "sm_s".IMG_SM_SIZE."_".$nagy;
    if(!file_exists(IMG_DIR.$kicsi)){
        $img = new ImageResize(IMG_DIR.$nagy);
        if($img->getSourceHeight()>IMG_LG_SIZE || $img->getSourceWidth()>IMG_LG_SIZE){
            $img->resizeToBestFit(IMG_LG_SIZE,IMG_LG_SIZE);
            $img->save(IMG_DIR.$nagy);
        }
        //$img->resize(IMG_SM_SIZE,IMG_SM_SIZE,true);
        $img->crop(IMG_SM_SIZE,IMG_SM_SIZE,true);
        $img->save(IMG_DIR.$kicsi);
    }
    return $kicsi;
}
?>