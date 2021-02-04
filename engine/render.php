<?php
function drawMenu(array $menu)
{
    echo '<ul class="nav justify-content-end">';
    foreach ($menu as $item) {
        echo '<li class="nav-item">
                <a class="nav-link active" href="' . $item['link'] . '">';
        echo $item['title'];
        echo '</a>
            </li>';
    }
    echo '</ul>';
}