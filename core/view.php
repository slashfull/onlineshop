<?php

class View {

    public function render($controller, $view) {
        $controller = get_class($controller);
        $controller = substr($controller, 0, -10);
        $path = "views/" . $controller . "/" . $view;

        if (file_exists($path . ".php")) {
            require $path . ".php";
        } else {
            echo "Error: Vista inválida, no existe.";
        }
        
    }

    public function renderOther($controller, $view) {
        $controller = substr($controller, 0, -10);
        $path = "views/" . $controller . "/" . $view;

        if (file_exists($path . ".php")) {
            require $path . ".php";
        } else {
            echo "Error: Vista inválida, no existe.";
        }
        
    }

}

?>