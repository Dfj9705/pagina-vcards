<?php

namespace Controllers;


use Classes\Email;
use DateTime;
use Exception;
use Model\Cotizacion;
use MVC\Router;

class CotizadorController
{
    public static function index(Router $router)
    {
        $router->render('pages/cotizador');
    }

    public static function enviar(Router $router)
    {

        $grecaptcha = $_POST['g-recaptcha-response'];

        if (!isset($grecaptcha)) {
            echo json_encode([
                'codigo' => 2,
                'mensaje' => 'Token reCAPTCHA no proporcionado',
            ]);
            exit;
        }

        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = $_ENV['RECAPTCHA_SECRET_KEY'];
        $recaptcha_response = $grecaptcha;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $recaptcha_result = curl_exec($ch);
        curl_close($ch);

        $recaptcha_data = json_decode($recaptcha_result);

        if (!$recaptcha_data->success) {
            echo json_encode([
                'codigo' => 2,
                'mensaje' => 'Verificación reCAPTCHA fallida',
            ]);
            exit;
        }
        try {

            $fecha = new DateTime($_POST['datetime']);
            $fechaActual = new DateTime();

            if ($fecha->format('Y-m-d H:i:s') < $fechaActual->format('Y-m-d H:i:s')) {
                echo json_encode([
                    'codigo' => 2,
                    'mensaje' => 'La fecha que eligio es anterior a la fecha actual',
                ]);
                exit;
            }

            $cotizacion = new Cotizacion([
                'nombre' => $_POST['name'],
                'telefono' => $_POST['phone'],
                'email' => $_POST['email'],
                'servicio' => $_POST['service'],
                'observaciones' => $_POST['observations'],
                'fecha' => $_POST['datetime'],
            ]);

            $cotizacion->guardar();

            $email = new Email();
            $body = $router->load('emails/cotizacion', [
                'cotizacion' => $cotizacion
            ]);
            $email->generateEmail('Cotización Vcards', [$_POST['email']], $body);
            $email->send();

            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Solicitud recibida exitosamente',
            ]);
            exit;

        } catch (Exception $e) {
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al recibir solicitud',
                'detalle' => $e->getMessage()
            ]);
            exit;
        }
    }
}