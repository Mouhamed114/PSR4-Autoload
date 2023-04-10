<?php



require '../vendor/autoload.php';
use App\Hello;



$affich = new Hello;

echo $affich->talk();