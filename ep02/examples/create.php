<?php
require __DIR__ . "/../vendor/autoload.php";


use Source\Models\User;
use Source\Models\Address;


$user = new User();

$user->first_name = "Reinaldo";
$user->last_name = "Almeida";
$user->genre = "M";
$user->Save();

$addr = new Address();
$addr->add($user, "José Zocal", "41");

$addr->save();



var_dump($user);


