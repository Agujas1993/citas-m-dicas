
<?php include_once 'funciones.php'; ?>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<p>

<label for="nombre">Nombre</label>
<input type="text" name="nombre"
<?php 
mostrar_campo('nombre');?>
 placeholder="Introduce tu nombre">
 <?php mostrar_error_campo('nombre', $errores) ?> 
</p>
<p>
<label for="email">Email</label>
<input type="email" name="email"
<?php mostrar_campo('email')?>>
<?php mostrar_error_campo('email', $errores) ?> 
</p>
<p>
<label for="clave1">Contraseña</label>
<input type="password" name="clave1">
<?php mostrar_error_campo('clave1', $errores) ?> 
</p>
<p>
<label for="clave2">Repetir clave</label>
<input type="password" name="clave2">
<?php mostrar_error_campo('clave2', $errores) ?> 
</p>
<p>
<label>
<input type="submit" value="Enviar">
</label>
</p>
</form>