<?php
function readCsv(string $source)
{
    $f = fopen($source, 'r');
    $data = [];
    while ($row = fgetcsv($f, 0, ';')) {
        $data[] = $row;
    }

    fclose($f);
    return $data;
}

function getFiles(string $directory) {
    return array_filter(
        scandir($directory),
        function ($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}

