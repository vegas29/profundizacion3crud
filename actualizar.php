<?php

include('conexionc.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "SELECT * FROM computadores WHERE idC = $id ";
  $results = mysqli_query($conn,$query);
  if(mysqli_num_rows($results)==1){
      $row = mysqli_fetch_array($results);
      $nombre = $row['nombre'];
      $procesador = $row['procesador'];
      $grafica = $row['grafica'];
      $madre = $row['madre'];
      $ram = $row['ram'];
      $disco = $row['disco'];
      $fuente = $row['fuente'];
      $monitor = $row['monitor'];
      $caja = $row['caja'];
      $teclado = $row['teclado'];
      $raton = $row['raton'];
      $disipacion = $row['disipacion'];
      $altavoces = $row['altavoces'];
      $ventil = $row['ventiladores'];
      $imagen = $row['imagen'];

  }
}

  if(isset($_POST['act'])){
    $id = $_GET['id'];
    $nombrec = $_POST['nombre'];
    $procesadorc = $_POST['procesador'];
    $grafica = $_POST['tarjetag'];
    $madre = $_POST['tarjetam'];
    $ram = $_POST['memram'];
    $disco = $_POST['disco'];
    $fuente = $_POST['fuente'];
    $monitor = $_POST['monitor'];
    $caja = $_POST['caja'];
    $teclado = $_POST['teclado'];
    $raton = $_POST['raton'];
    $disipacion = $_POST['disi'];
    $altavoces = $_POST['alta'];
    $ventil = $_POST['ventil'];
    $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $query = "UPDATE computadores set nombre = '$nombrec', procesador = '$procesadorc', grafica = '$grafica',
    madre = '$madre', ram = '$ram', disco = '$disco', fuente = '$fuente',
    monitor = '$monitor', caja = '$caja', teclado = '$teclado', raton = '$raton', disipacion = '$disipacion',
    altavoces = '$altavoces', ventiladores = '$ventil', imagen = '$imagen' WHERE idC = $id ";
    $consultas = mysqli_query($conn,$query);

    header('location:tabla.php');
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/crud.css">
	<link rel="stylesheet" type="text/css" href="boostrap/boostrap/dist/css/bootstrap.css">
</head>
<body style="background-image: url('images/12345.jpg');>

	
		<div class="limiter">
		<div class="container-login100">
		
				
			<div class="wrap-login100">
				
				<form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						ACTUALIZAR PC
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre" value=" <?php echo $nombre; ?>">
						<span class="focus-input100"></span>
					</div>
					

					<select class="browser-default custom-select" name="procesador" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM procesadores";
					$execute = mysqli_query($conn,$traer);
					
					?>
					<?php foreach($execute as $opciones):?>

					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					
			
					<?php endforeach ?>
					
					
					</select>
  					

					<select class="browser-default custom-select" name="tarjetag" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM graficas";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="tarjetam" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM madres";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="memram" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM rams";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="disco" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM discos";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					

					<select class="browser-default custom-select" name="fuente" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM fuentes";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="monitor" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM monitores";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="caja" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM cajas";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="teclado" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM teclados";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="raton" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM ratones";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="disi" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM disipaciones";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="alta" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM altavoces";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>

					<select class="browser-default custom-select" name="ventil" style="margin-bottom:20px;">
					<?php
					$traer = "SELECT * FROM ventiladores";
					$execute = mysqli_query($conn,$traer);
					?>
					<?php foreach($execute as $opciones): ?>
					<option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
					<?php endforeach ?>
					</select>
					<div class="imagenm">
					<img name="imagenpc" height="100px" style="margin-bottom:20px; display:block; margin:auto;" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>"/>
					<br>
					</div>  

					<div >
						<input class="input100" type="file" name="img">
					</div>

          
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="act">
								Actualizar
              				</button>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" name="elim" href="tabla.php">
								Volver
							</a>
						</div>
					</div>

					
				</form>

				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
