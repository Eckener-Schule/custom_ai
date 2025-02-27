<?php

class Router {

    // Array für die definierten Routen
    private $routes = [];

    // Methode zum Hinzufügen einer Route
    public function addRoute($method, $route, $controller, $action) {
        $this->routes[] = [
            'method' => $method,
            'route' => $route,
            'controller' => $controller,
            'action' => $action
        ];
    }

    // Methode zum Verarbeiten der Anfrage
    public function dispatch() {
        // Hole die aktuelle URI (ohne Domain und "index.php/")
        $uri = $_SERVER['REQUEST_URI'];
        
        // Entferne die Base-URL /index.php (wenn sie vorhanden ist)
        $uri = str_replace('/index.php', '', $uri);

        // Hole die HTTP-Methode (GET, POST, etc.)
        $method = $_SERVER['REQUEST_METHOD'];

        // Durchlaufe alle definierten Routen
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match('#^' . $route['route'] . '$#', $uri, $matches)) {
                // Extrahiere Parameter aus der URI, wenn nötig
                array_shift($matches);  // Entferne den gesamten String (URI)

                // Rufe den entsprechenden Controller und die Methode auf
                $controller = new $route['controller']();
                call_user_func_array([$controller, $route['action']], $matches);  // Parameter an die Methode übergeben
                return;
            }
        }

        // Falls keine Route gefunden wurde
        echo "404 - Seite nicht gefunden";
    }
}

