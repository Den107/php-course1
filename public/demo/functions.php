<?php
function getData(string $source)
{
    $f = fopen('db/' . $source, 'r');
    while ($row = fgetcsv($f, 0, ';')) {
        yield $row;
    }
    fclose($f);
}

function getMenu(): array
{
    $menu = [];
    foreach (getData('menu.csv') as $row) {
        $menu[] = [
            'title' => $row[0],
            'link' => $row[1]
        ];
    }
    return $menu;
}

function getLessons(): array
{
    $lessons = [];
    foreach (getData('lessons.csv') as $row) {
        $lessons[$row[0]] = [
            'id' => $row[0],
            'title' => $row[1],
            'description' => $row[2],
        ];
    }
    return $lessons;
}