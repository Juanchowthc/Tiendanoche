<!DOCTYPE html>
<html>
<head>
	<title>Realizar compra</title>
	<style>
		body {
			background-color: #f2f2f2;
			color: #000;
			font-family: Arial, sans-serif;
			text-align: center;
		}
		form {
			display: inline-block;
			text-align: left;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input, select {
			padding: 5px;
			border-radius: 5px;
			border: none;
			margin-bottom: 10px;
			width: 100%;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Realizar compra</h1>
	<form method="post" action="comprar.php">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="telefono">Teléfono:</label>
		<input type="tel" id="telefono" name="telefono" required>
		<label for="direccion">Dirección:</label>
		<input type="text" id="direccion" name="direccion" required>
		<label for="producto">Producto:</label>
		<select id="producto" name="producto" required>
			<option value="">Seleccione un producto</option>
			<option value="Reloj 1">Reloj ARMANI</option>
			<option value="Reloj 2">Reloj CASIO</option>
			<option value="Reloj 3">Reloj CASIO ILUMINA</option>
            <option value="Reloj 3">Reloj FOSSIL</option>
            <option value="Reloj 3">Reloj GSHOCK</option>
            <option value="Reloj 3">Reloj GUESS</option>
            <option value="Reloj 3">Reloj INVICTA</option>
            <option value="Reloj 3">Reloj NAVIFORCE</option>
            <option value="Reloj 3">Reloj Q&Q</option>
            <option value="Reloj 3">Reloj SWATCH</option>
            <option value="Reloj 3">Reloj TISSOT</option>
            <option value="Reloj 3">Reloj TOMMY</option>
		</select>
		<label for="cantidad">Cantidad:</label>
		<input type="number" id="cantidad" name="cantidad" min="1" max="10" required>
		<input type="submit" value="Realizar compra">
	</form>
</body>
</html>