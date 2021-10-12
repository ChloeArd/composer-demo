<?php

require 'vendor/autoload.php';

use Chloe\Composerdemo\Controller\HomeController;
use Chloe\Composerdemo\Controller\HomeControllerBis;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\VarDumper\Dumper;


$controller = new HomeController();
$controller2 = new HomeControllerBis();

$controller->index();
$controller2->index();

// Create a log channel
$log = new Logger("name");
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/log.txt', Logger::WARNING));

// add records to the log
$log->warning("Foo");
$log->error("Bar");

$y = [];
for ($i = 0; $i < 50; $i++) {
    $y[] = "Chloé";
}

dd($y);

// composer init -> initialiser un projet php avec composer
// composer require -> importer une librairie php depuis packagist (vers les dossier vendor)
// composer remove -> supprimer une librairie php depuis le fichier composer.json
// composer dumpautoload -> pas besoin si psr-4 dans l'autoload
// composer install -> installer les dépendances si le dossier vendor n'existe pas
//                  -> ou si pas à jour