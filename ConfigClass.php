<?php

class ConfigClass
{

  public static $items = [];

  public static function load( $filepath = [])
  {

    # Incluye el fichero de config que vamos a leer
    # $filepath[0] es el directorio donde se encuentra, normalmente config
    # $filepath[1] es el nombre del fichero

    static::$items = include(  dirname(__FILE__).'/' . $filepath[0] . '/' . $filepath[1] . '.php');

  }

  #
  # Formato de los parametros de entrada:  directorio.fichero.primer-parametro-del-array
  public static function get( $params = null)
  {
    # Leemos los parametros de entrada y los divimos en
    $input = explode('.', $params);

    # Obtenemos los dos primeros valores el directorio y el fichero
    $filepath[0] = $input[0];
    $filepath[1] = $input[1];
    unset( $input[0]);
    unset( $input[1]);

    # Y por ultimo obtenemos el primer parametro del array
    $key = implode( '.', $input);

    # Incluimos el fichero de configruaciones y lo cargamos directamente en un variable
    static::load( $filepath);

    if ( !empty( $key))
    {
      return static::$items[ $key];
    }

    return static::$items;

  }

}

