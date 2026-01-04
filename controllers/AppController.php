<?php

namespace Controllers;

use Model\Anuncio;
use Model\MontajeServicio;
use Model\TipoServicio;
use MVC\Router;

class AppController
{
    public static function index(Router $router)
    {
        $anuncios = Anuncio::getAnuncionOrder();
        $router->render('pages/home', [
            'anuncios' => $anuncios
        ]);
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
    public static function galeria(Router $router)
    {
        $montajes = MontajeServicio::where('activo', 1);

        foreach ($montajes as $key => $value) {
            $value->tipo_servicio = TipoServicio::find($value->tipo_servicio_id);
            $value->fotos = json_decode($value->fotos);
        }
        $router->render('pages/galeria', [
            'montajes' => $montajes
        ]);
    }

}