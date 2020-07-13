<?php
include "../vendor/autoload.php";

use Core\Config;
use Core\CountDB;

$count = new CountDB();
echo "таблица содержит ".$count->countRows()." строк";
