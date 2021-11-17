<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<!-- Esto viene desde controllers > Productos.php -->
<h4><?php echo $titulo; ?></h4>

<form id="productos" name ="productos" method="POST" action="<?php echo base_url(); ?>index.php/productos/registrar">
	
	Código <input type="num" name="cod" id="cod">
	<br>
	Descripcion <input type="text" name="des" id="des">
	<br>
	Inventariable <input type="text" name="inv" id="inv">
	<br>
	Stock<input type="text" name="sto" id="sto">
	<br>
	<input type="submit" value="registrar">
</form>

</body>
</html>
