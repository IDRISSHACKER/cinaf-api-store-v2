<?php
define("ROOT", __DIR__);
define("PROJECT_ROOT_PATH", ROOT . '/');

require __DIR__ . '/vendor/autoload.php';
require_once PROJECT_ROOT_PATH . "inc/config.php";

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');
$dotenv->load(__DIR__ . '/.env', __DIR__ . '/.env.dev');

use App\Config;
use Model\Software;

$software = new Software();

dump($software->getSoftwares());
