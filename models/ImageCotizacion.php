<?php

namespace Model;

class ImageCotizacion extends ActiveRecord
{
    protected static $tabla = 'image_cotizaciones';
    protected static $columnasDB = ['id', 'cotizacion_id', 'path', 'nombre_original', 'created_at', 'updated_at'];

    protected static $idTabla = 'id';
    public $id;
    public $cotizacion_id;
    public $path;
    public $nombre_original;
    public $created_at;
    public $updated_at;
}

