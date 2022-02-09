<?php

	require_once "ConfigClass.php";

	$database_config = ConfigClass::get("config.database.default");

	print_r( $database_config);