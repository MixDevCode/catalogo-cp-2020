<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es" >

<head>
  <meta charset="UTF-8">
  <title>LTD</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.3/css/all.css" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://habboo-a.akamaihd.net/c_images/album1584/PT099.gif');
  background-repeat: no-repeat;
  width: 300px;
  font-size: 16px;
  padding: 12px 20px 12px 45px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
.cd-slider-nav {
  text-align: center;
}

.cd-slider-nav ul {
  padding: 0;
  margin: 0;
}

.cd-slider-nav ul li {
  display: inline-block;
  margin: 80px 40px;
}

.cd-slider-nav ul li a {
  text-decoration: none;
}

.cd-slider-nav ul li h6 {
  font-size: 14px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 400;
  color: #fff;
  margin-top: 15px;
}

.cd-slider-nav ul .selected h6 {
  color: #ffbb05;
  text-decoration: none;
}

.cd-slider-nav .image-icon {
  margin: 0 auto;
  display: block;
  width: 80px;
  height: 80px;
  line-height: 80px;
  border-radius: 50%;
  text-align: center;
  margin: 0px;
  padding: 0px;
  background-color: #ffbb05;
}

.cd-slider-nav .image-icon:hover {
  background-color: #fff;
  -moz-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  -webkit-transition: all 0.2s linear;
}
</style>
</head>
<body>
	<br><center><img src="https://i.imgur.com/38qDboj.png"></img></center>
	<div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li><a href="../"><div class="image-icon"><img src="https://habboo-a.akamaihd.net/c_images/album1584/FR904.gif"></img></div><h6>Inicio</h6></a></li>
                <li><a href="../rares/"><div class="image-icon"><img src="https://habboo-a.akamaihd.net/c_images/album1584/SFR05.gif"></div><h6>Rares</h6></a></li>
                <li><a href="../megarares/"><div class="image-icon"><img src="https://static.habbo-happy.net/img/furni/small/467107496690005.gif"></div><h6>Megarares</h6></a></li>
				<li class="selected"><a href="../ltd/"><div class="image-icon"><img src="https://habboo-a.akamaihd.net/c_images/album1584/PIH10.gif"></div><h6>LTD</h6></a></li>
              </ul>
            </nav> 
          </div>
	<center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar" title="Busca un raro por su nombre" width="300px"></input></center>
  <div class="table-rares">
   <div class="header"><b>Rares</b></div>
   <table id="myTable" cellspacing="0">
      <tr>
         <th><b>IMAGEN</b></th>
         <th><b>NOMBRE</b></th>
		 <th><b>VALOR</b></th>
		 <th width="230"><b>DESCRIPCION</b></th>
		 <?php
		 if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
					echo "<td><b>EDITAR</b></td>
					<td><b>ELIMINAR</b></td>";
				}
		?>
      </tr>
	</form>
	<?php 
	$link = mysqli_connect("localhost", "root", "", "rares");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sql = ("SELECT ID, imagen, nombre, valor, descripcion FROM ltd order by valor DESC");
	$result = $link->query($sql); 
	if ($row = mysqli_fetch_array($result)){ 
	do {
		echo "<tr>
				<td><img src='".$row["imagen"]."'</img></td>
				<td>".$row["nombre"]."</td>
				<td>".$row["valor"]." <img src='https://static.habbo-happy.net/img/furni/small/937227948568761.gif'></img></td>
				<td>".$row["descripcion"]."</td>";
				if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
					echo "<td><a href='/admin/editar-rare.php?id=".$row["ID"]."'>Editar</a></td>";
					echo "<td><a href='/admin/eliminar-rare.php?id=".$row["ID"]."'>Eliminar</a></td>";
				}
				echo "</tr> \n"; 
	} while ($row = mysqli_fetch_array($result)); 
	echo "</table> \n";
	} else { 
		echo "<tr>
				<td>No</td>
				<td>se</td>
				<td>encontró</td>
				<td>valores.</td>
				</tr> \n";
		echo "</table> \n"; 
	}   
?>
<img src="/css/images/hfinale.png"></img>
</div>
  
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>

</html>
