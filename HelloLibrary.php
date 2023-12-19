<?php

require_once __DIR__ . "/vendor/autoload.php";

use \Rahmat\Belajar\Customer;

$customer = new Customer("Rahmat");
echo $customer->sayHello("Budi") . PHP_EOL;
echo $customer->sayHello() . PHP_EOL;
