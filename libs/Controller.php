<?php

namespace Core;

abstract class Controller
{
    public function renderView(string $viewName, array $viewData = []) //$viewData =[] znači da je opcionalno (mogu ga zadati i ne moram)
    {
        require VIEW . "{$viewName}.php"; //iskoristi konstantu VIEW da odeš u root, pa src pa View
    }                                  //$viewName smo stavili kao varijabilni dio da kad budemo imali više
}                    //view-ova, možemo uvijek koristiti i samo proslijedim ime