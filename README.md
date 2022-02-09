# leer-ficheros-de-configuracion-php
Class to read config files in PHP. 

I originally found this class in an internet forum what I don't remember which one and I made some modifications to make it more dynamic and accept more parameters

Usage in PHP Code

```

	require_once "ConfigClass.php";

	$database_config = ConfigClass::get("config.database.default");

	print_r( $database_config);
  
```

output

```

Array
(
    [dsn] => mysql:host=localhost;dbname=default;charset=utf8mb4
    [username] => root
    [password] => root
)
  
```

If need read a element into array

```

	$database_config = ConfigClass::get("config.database.default")['username'];
  
```

Thanks for readme<br>
Alex.
