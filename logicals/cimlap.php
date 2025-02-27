<?php
$path = __DIR__."/../images/videok/";
if(!is_dir($path)){
    mkdir($path);
}
$megjeleniteni = [];
$videok = scandir($path);
foreach ($videok AS $video){
    if($video == "." || $video == ".."){
        continue;
    }
    $mime = mime_content_type($path.$video);
    if(!str_contains($mime, "video")){
        continue;
    }
    $megjeleniteni[] = [
        "path"=>"images/videok/".$video,
        "nev"=>$video,
        "mime"=>$mime
    ];
}
