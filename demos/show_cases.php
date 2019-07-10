<?php

include 'cases.php';

foreach ($path_def as $path => $array_def) {
    foreach ($array_def as $key => $def) {
        echo sprintf('%-20s %-30s %s'.PHP_EOL, $path, $key, json_encode($def));
    }
}
