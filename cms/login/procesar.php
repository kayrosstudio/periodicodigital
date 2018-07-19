<?php
/**
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
        // This function will run within each post array including multi-dimensional arrays 
	function ExtendedAddslash(&$params)
	{ 
        	foreach ($params as &$var) {
            	// check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            	is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        	}
	}

     // Initialize ExtendedAddslash() function for every $_POST variable
    	ExtendedAddslash($_POST);

$nombre_miembro = $_POST['nombre-miembro'];
$primer_apellido_miembro = $_POST['primer-apellido-miembro']; 
$segundo_apellido_miembro = $_POST['segundo-apellido-miembro']; 
$telefono_miembro = $_POST['telefono-miembro']; 
$edad_miembro = $_POST['edad-miembro'];
$observaciones_miembro = $_POST['observaciones-miembro']; 
$fecha_miembro = $_POST['fecha-miembro'];
$optradio = $_POST['optradio'];


//$query = "SELECT * FROM congregados WHERE telefonoCongregado = '$telefono_miembro'";
$query = "INSERT INTO `congregados` (nombreCongregado, apellido1Congregado, apellido2Congregado, telefonoCongregado, edadCongregado, observacionCongregado, fechaCongregado, nuevoCongregado) VALUES ('$nombre_miembro', '$primer_apellido_miembro', '$segundo_apellido_miembro','$telefono_miembro', '$edad_miembro', '$observaciones_miembro', '$fecha_miembro', '$optradio')";

$servername = "localhost";
$username = "kayrosst";
$password = "K4yr052016!";
$dbname = "kayrosst_consolidacion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($query) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

/*$sqlsearch = $conn->query($query);
$resultcount = $conn->numrows($sqlsearch);

if ($resultcount > 0) {
 
    $conn->query("UPDATE `congregados` SET 
                                `nombreCongregado` = '$nombre_miembro',
                                `apellido1Congregado` = '$primer_apellido_miembro',
                                `apellido2Congregado` = '$segundo_apellido_miembro',
                                `telefonoCongregado` = '$telefono_miembro',
                                `edadCongregado` = '$edad_miembro',
                                `fechaCongregado` = '$fecha_miembro',
                                `nuevoCongregado` = '$optradio',
                                `obersvacionCongregado` = '$observaciones_miembro'        
                             WHERE `telefonoCongregado` = '$telefono_miembro'") 
     or die(mysql_error());
    
} else {

    $conn->query("INSERT INTO `congregados` (nombreCongregado, apellido1Congregado, apellido2Congregado, telefonoCongregado, edadCongregado, observacionCongregado, fechaCongregado, nuevoCongregado) VALUES ('$nombre_miembro', '$primer_apellido_miembro', '$segundo_apellido_miembro','$telefono_miembro', '$edad_miembro', '$observaciones_miembro', '$fecha_miembro', '$optradio') ") 
    or die(mysql_error());  

}*/


/*if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$conn->close();

?>
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=big5">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ingresar Nuevo Miembro - Iglesia Pasi&oacute;n por las Almas</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
        <!-- Top content -->
        <div class="top-content">
        	<div class="container">

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<h1 class="wow fadeInLeftBig">Ministerio de Consolidaci&oacute;n</h1>
						<div class="description wow fadeInLeftBig"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp">
						<div class="r-form-1-top">
							<div class="r-form-1-top-left">
								<h3>El nuevo miembro fue agregado satisfactoriamente!!!</h3>
							</div>
							<div class="r-form-1-top-right">
								<i class="fa fa-check"></i>
							</div>
						</div>
						<div class="r-form-1-bottom">
							<form role="form" action="" method="">
  								<button type="button" class="btn-inline" onClick="window.location.href='registro.php'">Regresar</button>
							</form>
						</div>
					</div>
				</div>

            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	
	<script>
		$(document).ready(function(){
			var date_input=$('input[name="date"]'); //our date input has the name "date"
			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			date_input.datepicker({
				format: 'dd/mm/yyyy',
				container: container,
				todayHighlight: true,
				autoclose: true,
			})
		})
	</script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>