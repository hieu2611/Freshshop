<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo BASE_URL ?>public/libs/images/favicon.ico" type="image/x-icon">
	<title>Fresh Shop</title>
</head>
<body>
		<?php 
		spl_autoload_register(function($class){
			include_once 'system/libs/'.$class.'.php';
		});	
		include_once 'app/config/config.php';	

		$main = new main();

	    ?>

</body>
</html>