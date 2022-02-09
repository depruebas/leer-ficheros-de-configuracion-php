<?php

	return [

		# Datos conexión base de datos
		'database' => [
			'dsn' => 'mysql:host=localhost;dbname=default;charset=utf8mb4',
      'username' => 'root',
      'password' => 'root',
		],

		# ruta de logs de la aplicacion
    'ruta_logs' => [
      'general' =>   dirname( dirname(__FILE__)) . '/logs/',
      'error_log' =>  dirname( dirname(__FILE__)). '/logs/',
    ],

	];