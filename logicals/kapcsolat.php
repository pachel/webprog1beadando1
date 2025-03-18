<?php
if(isset($_POST) && !empty($_POST["szoveg"]) && !empty($_POST["nev"])){
    //Ha be van jelentkezve
    if(isset($_SESSION['id']) && is_numeric($_SESSION['id'])){
        $data = [
          "id_felhasznalok" => $_SESSION['id'],
          "szoveg"=>$_POST["szoveg"]
        ];
    }
    else{
        $data = [
            "nev" => $_POST["nev"],
            "szoveg"=>$_POST["szoveg"]
        ];
    }
    $db->insert("uzenetek",$data);
    $message = "Az üzenetét elküldtük!";
}