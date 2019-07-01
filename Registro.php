	<?php include 'header.php' ?>
	<div>
	<div >
		<div> 
			<div>
				<div >
					<form  class="Myformulario" method='POST' >
					<div class="form-group text-center">
						<h3>Registro del dependiente</h3>
					</div>
					<div class="form-group text-center">
						<h2>Datos Personales</h2>
					</div>
					<div class="form-group text-center">
						<span>Nombre:</span>
						<input type="text" id="Nombre" name="Nombre" required=""  maxlength="45" pattern="[A-Za-z]+">
					</div>
					<div class="form-group text-center">
						<span>Apellido Paterno:</span>
						<input type="text" id="ApellidoP" name="ApellidoP" required="" pattern="[A-Za-z]+" maxlength="45">
					</div>
					<div class="form-group text-center">
						<span>Apellido Materno:</span>
						<input type="text" id="ApellidoM" name="ApellidoM" required="" pattern="[A-Za-z]+" maxlength="45">
					</div>
					
				
					<div class="form-group text-center">
						<h2>Datos de usuario</h2>
					</div>
					
					<div class="form-group text-center">
						<span>Correo eletr&oacute;nico:</span>
						<input type="email" name="Correo" id="Correo" required="required">
					</div>
					
					<div class="form-group text-center">
						<span>Contrase&ntilde;a:</span>
						<input type="password" name="Contrasena" id="Contrasena" required=""  minlength="8" maxlength="20">
					</div>
					<div class="form-group text-center">
					<span>Rol:</span>
						<input type="text"  id="Rol" name="Rol" required="">
						</div>
						<div class="form-group text-center">
				    <span>Dependencia:</span>
						<input type="text"  id="Dependencia" name="Rol" required="">
                        </div>
				<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registrarse" id="Registro"  name="Registro" style="margin: 25px;" required="">
					</div>
    			 </div>
    			 </div>
				</div>
						</form>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
include 'footer.php'; 
$id=1;
$Nombre=$_POST["Nombre"];
$ApellidoP=$_POST["ApellidoP"];     $ApellidoM=$_POST["ApellidoM"];
$Correo=$_POST["Correo"];  $Contra=$_POST["Contrasena"];
$Dependencia=1;
$Rol=1;
include 'Conexion.php';
$stmt=$conn->prepare("call sp_Insertar_Usuarios(?,?,?,?,?,?,?)");
$stmt->bindParam(1,$Correo, PDO::PARAM_STR);
$stmt->bindParam(2,$clave, PDO::PARAM_STR);
$stmt->bindParam(3,$Nombre, PDO::PARAM_STR);
$stmt->bindParam(4,$ApellidoP, PDO::PARAM_STR);
$stmt->bindParam(5,$ApellidoM, PDO::PARAM_STR);
$stmt->bindParam(6,$Dependencia, PDO::PARAM_STR);
$stmt->bindParam(7,$Rol, PDO::PARAM_STR);
$stmt->execute();
?>
</body>
</html>