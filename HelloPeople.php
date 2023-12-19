<?php

require __DIR__ . "/vendor/autoload.php";

use BelajarPhpComposer\Data\People;

$people = new People("Rahmat");

$people->sayHello("Budi");
