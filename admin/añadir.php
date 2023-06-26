<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Añadir rares</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/frank.png" height="300px" alt="IMG">
			</div>
			
			<?php
	/* Database credentials. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'rares');
	 
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	if (!empty($_POST)) {
	
	$url = $_POST['url'];
	$nombre = $_POST['nombre'];
	$valor = $_POST['valor'];
	$desc = $_POST['desc'];
	
	
	switch($_POST['rare']){
	case 'rares':
	$sql = "INSERT INTO rares (imagen, nombre, valor, descripcion) ".
		"VALUES ('$url', '$nombre', '$valor', '$desc')";
	$result = $link->query($sql);
	echo "¡Gracias! Hemos recibido sus datos.\n";
	echo '<div class="container-contact1-form-btn">
					<a href="./añadir.php"><button class="contact1-form-btn">
						<span>
							Subir otro.
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
					</a>
				</div>';
	break;
	case 'megas':
			$sql = "INSERT INTO megas (imagen, nombre, valor, descripcion) ".
			"VALUES ('$url', '$nombre', '$valor', '$desc')";
			$result = $link->query($sql);
			echo "¡Gracias! Hemos recibido sus datos.\n";
			echo '<div class="container-contact1-form-btn">
					<a href="./añadir.php"><button class="contact1-form-btn">
						<span>
							Subir otro.
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
					</a>
				</div>';
	break;
	case 'ltd':
			$sql = "INSERT INTO ltd (imagen, nombre, valor, descripcion) ".
			"VALUES ('$url', '$nombre', '$valor', '$desc')";
			$result = $link->query($sql);
			echo "¡Gracias! Hemos recibido sus datos.\n";
			echo '<div class="container-contact1-form-btn">
					<a href="./añadir.php"><button class="contact1-form-btn">
						<span>
							Subir otro.
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
					</a>
				</div>';
	break;
	}
	} else {
?> 

			<form method="post" action="" enctype="multipart/form-data" class="contact1-form validate-form">
				<span class="contact1-form-title">
					Agregar rare/mega
				</span>

				<div class="wrap-input1 validate-input" data-validate = "URL es requerido">
					<input class="input1" type="text" name="url" placeholder="URL de Imagen">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Nombre es requerido">
					<input class="input1" type="text" name="nombre" placeholder="Nombre">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "El valor es requerido">
					<input class="input1" type="text" name="valor" placeholder="Valor">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "La descripcion es requerida">
					<input class="input1" type="text" name="desc" placeholder="Descripcion">
					<span class="shadow-input1"></span>
				</div>
				
				<div class="wrap-input1">
					<select class="input1" name="rare">
						<option value="rares">Rare</option>
						<option value="megas">Megarare</option>
						<option value="ltd">LTD</option>
					</select>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<input type="submit" name="send" class="contact1-form-btn" value="Subir">
				</div>
			</form>
		</div>
	</div>
	<?php }
	?>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
