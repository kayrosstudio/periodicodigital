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
								<h3>Agregar un miembro</h3>
								<p>Complete los datos del miembro nuevo o reconciliado:</p>
							</div>
							<div class="r-form-1-top-right">
								<i class="fa fa-pencil"></i>
							</div>
						</div>
						<div class="r-form-1-bottom">
							<form role="form" action="procesar.php" method="post">
								<div class="form-group">
									<label class="sr-only" for="nombre-miembro">Nombre</label>
									<input type="text" name="nombre-miembro" placeholder="Nombre" class="r-form-1-first-name form-control" id="r-form-1-first-name">
								</div>
								<div class="form-group">
									<label class="sr-only" for="primer-apellido-miembro">Primer Apellido</label>
									<input type="text" name="primer-apellido-miembro" placeholder="Primer Apellido" class="r-form-1-last-name form-control" id="r-form-1-last-name">
								</div>
								<div class="form-group">
									<label class="sr-only" for="segundo-apellido-miembro">Segundo Apellido</label>
									<input type="text" name="segundo-apellido-miembro" placeholder="Segundo Apellido" class="r-form-1-last-name form-control" id="r-form-1-last-name">
								</div>
								<div class="form-group">
									<label class="sr-only" for="telefono-miembro">Telefono</label>
									<input type="number" name="telefono-miembro" placeholder="Telefono" class="r-form-1-email form-control" id="r-form-1-email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="edad-miembro">Edad</label>
									<input type="number" name="edad-miembro" placeholder="Edad" class="r-form-1-email form-control" id="r-form-1-email">
								</div>
  								<div class="form-group">
  									<label class="sr-only" for="observaciones-miembro">Observaciones:</label>
    									<input type="text" class="form-control" name="observaciones-miembro" placeholder="Observaciones" id="r-form-1-observaciones">
  		      						</div>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar">
										</i>
									</div>
									<input class="form-control" id="date" name="fecha-miembro" placeholder="YYYY/MM/DD" type="text"/>
								</div>  		      																				
								<div class="form-group">
									<label class="radio-inline"><input type="radio" name="optradio" value=1>Nuevo</label>
									<label class="radio-inline"><input type="radio" name="optradio" value=0>Reconciliado</label>
  								</div>
  								<div class="bfh-datepicker" data-format="y-m-d" data-date="today">
								</div>
  								<button type="button" class="btn-inline" onClick="window.location.href='index.php'">Regresar</button>
								<button type="submit" class="btn-inline">Agregar Miembro!</button>
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
				format: 'yyyy/mm/dd',
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
