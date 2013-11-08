<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Vendor\NyanCat;

$nyanCat = new NyanCat();

$loader = new Twig_Loader_Filesystem('app/Resources/views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html.twig', array('nyancat' => $nyanCat));
