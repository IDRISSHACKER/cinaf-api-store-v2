<?php
require __DIR__ . "/inc/bootstrap.php";

use App\Config;
use Model\Software;

$software = new Software();

/*
$software->setSoftware([
    "title" => "CINAF DESKTOP",
    "description" => "download an app for snaff ON DESKTOP",
    "fkSupport" => 1
]);
*/

$softwares = $software->update([
    "id" => 2,
    "title" => "CINAF DESKTOP UPDATED",
    "description" => "download an app for snaff ON DESKTOP UPDATED",
    "fkSupport" => 1
]);

dump($software->getSoftwares());
