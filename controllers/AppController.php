<?php

namespace Controllers;

use MVC\Router;

class AppController
{
    public static function index(Router $router)
    {
        $router->render('pages/home', []);
    }
    public static function somos(Router $router)
    {
        $router->render('pages/quienes-somos', []);
    }
    public static function mision(Router $router)
    {
        $router->render('pages/mision-vision', []);
    }
    public static function servicios(Router $router)
    {
        $router->render('pages/servicios', []);
    }
    public static function contacto(Router $router)
    {
        $router->render('pages/contacto', []);
    }
    public static function biblioteca(Router $router)
    {
        $router->render('pages/biblioteca', []);
    }
    public static function detalle(Router $router)
    {
        $router->render('pages/detalle', []);
    }
    public static function activaciones(Router $router)
    {
        $router->render('pages/activaciones', []);
    }

    public static function eventosCorporativos(Router $router)
    {
        $router->render('pages/eventos-corporativos', []);
    }
    public static function merchandasing(Router $router)
    {
        $router->render('pages/merchandasing', []);
    }
    public static function decoracionCorporativa(Router $router)
    {
        $router->render('pages/decoracion-corporativa', []);
    }

}