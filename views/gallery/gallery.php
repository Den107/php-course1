<?php
foreach ($images as $image) :
    $imgUrl = "/img/photo.php?id={$image['id']}";
    ?>
    <a href="<?=$imgUrl?>" target='_blank'>
        <img src="<?=$imgUrl?>" width='200'>
    </a>
<? endforeach;?>
