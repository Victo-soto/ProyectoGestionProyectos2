<?php

spl_autoload_register(function ($nombre_clase) {
    $directorys = array(
        'models/',
        'controllers/',
    );

    foreach ($directorys as $directory) {
        $ruta = $_SERVER['DOCUMENT_ROOT'] . '/ProyectoGestionProyectos2/';
        if (file_exists($ruta . $directory . $nombre_clase . '.php')) {
            require_once($ruta . $directory . $nombre_clase . '.php');
        }
    }
});

