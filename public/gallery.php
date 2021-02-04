<?php
$id = (int) $_GET['id'];

foreach ($images as $image) :
    $imgUrl = "index.php?id={$image['id']}";
    ?>
    <a href="<?=$imgUrl?>" target='_blank'>
        <img src="<?=$imgUrl?>" width='200'>
    </a>
<? endforeach;?>

