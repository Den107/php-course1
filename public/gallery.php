<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "filesystem.php";

$images = getFiles(PUBLIC_DIR . "img");
include VIEWS_DIR . "gallery/gallery.php";
?>