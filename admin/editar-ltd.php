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
		
	if (!empty($_POST)) {
	
	$url = $_POST['url'];
	$nombre = $_POST['nombre'];
	$valor = $_POST['valor'];
	$desc = $_POST['desc'];
	$id = $_POST['id'];
	
	$link = mysqli_connect("localhost", "root", "", "rares");
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	$sql = "UPDATE ltd SET imagen='$url', nombre='$nombre', valor='$valor', descripcion='$desc' WHERE ID='$id'";
    $link->query($sql);
    header("location: ../ltd/");
	} else {
?> 

			<form method="post" action="" enctype="multipart/form-data" class="contact1-form validate-form">
				<span class="contact1-form-title">
					Editar rare
				</span>
				<?php
				$id = $_GET['id'];
				$link = mysqli_connect("localhost", "root", "", "rares");
					if($link === false){
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}
				$sql = ("SELECT ID, imagen, nombre, valor, descripcion FROM ltd where ID = '$id'");
				$result = $link->query($sql);
				$row = mysqli_fetch_array($result)
				?>

				<div class="wrap-input1 validate-input" data-validate = "URL es requerido">
					<input class="input1" type="text" name="url" value="<?php echo $row["imagen"]?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Nombre es requerido">
					<input class="input1" type="text" name="nombre" value="<?php echo $row["nombre"]?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "El valor es requerido">
					<input class="input1" type="text" name="valor" value="<?php echo $row["valor"]?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "La descripcion es requerida">
					<input class="input1" type="text" value="<?php echo $row["descripcion"]?>" name="desc">
					<span class="shadow-input1"></span>
				</div>
				
				<div class="wrap-input1 validate-input" data-validate = "La descripcion es requerida">
					<input class="input1" type="hidden" value="<?php echo $row["ID"]?>" name="id">
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<input type="submit" name="send" class="contact1-form-btn" value="Actualizar">
				</div>
			</form>
		</div>
	</div>
	<?php 
	}
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
