<?php

// Inkludiere die Router- und Controller-Dateien
require_once '../Router.php';
require_once '../controller/MyController.php';

// Erstelle eine Instanz des Routers
$router = new Router();

// Definiere Routen
$router->addRoute('GET', '/', 'MyController', 'index');  // Route für die Startseite
$router->addRoute('GET', '/about', 'MyController', 'about');  // Route für "Über uns"

// Verarbeite die Anfrage
$router->dispatch();


