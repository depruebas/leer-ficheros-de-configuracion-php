<?php

	require_once "ConfigClass.php";

	$database_config = ConfigClass::get("config.database.default")['username'];

	print_r( $database_config);