<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TPV - ALBERTO ROMERO</title>
	<link href="<? echo base_url();?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
  <body>
        <div id="container">
	     	<h1>PROYECTO TPV</h1>
	        <div id="textblock">
			<h2>Listado de artículos</h2>
			<?php foreach ($articulos as $articulos_item): ?>
				<div class="main">
				<p><strong><?php echo $articulos_item->nombre; ?></strong></p>
				<p><?php echo $articulos_item->descripcion; ?></p>
		        	</div>

				<a href="<?php echo site_url('articulos/view/'.$articulos_item->idArticulo); ?>"><IMG  SRC="<? echo base_url();?>/css/img/Eye.png" width="12" height="12">Ver artículo</a><br/>
				<a href="<?php echo site_url('carritos/create/'.$articulos_item->idArticulo); ?>"><IMG  SRC="<? echo base_url();?>/css/img/add-icon.png" width="12" height="12">Añadir carrito</a>
			<?php endforeach; ?>
				</div>
				<div id="addandticket">
					<p><a href="<?php echo site_url('articulos/create'); ?>"><IMG  SRC="<? echo base_url();?>/css/img/add.png" width="12" height="12">Añadir artículo</a><br/>
					<a href="<?php echo site_url('tickets/'); ?>"><IMG  SRC="<? echo base_url();?>/css/img/carro.png" width="12" height="12">Tickets</a></p>
				</div>

		 <p class="footer"><A HREF="https://github.com/sn1k/PROYECTO-TPV"><IMG id="github" SRC="<? echo base_url();?>/css/img/github.png" width="16" height="16">Este proyecto en GitHub</A><br/>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	 </div>

    </body>
</html>

