<?php

include 'cases.php';

foreach ($path_def as $path => $array) {
    $path = __DIR__.'/locales/'.$path;
    echo $path.PHP_EOL;
    @mkdir(dirname($path), 0777, true);
    file_put_contents($path, json_encode($array, JSON_PRETTY_PRINT));
}
