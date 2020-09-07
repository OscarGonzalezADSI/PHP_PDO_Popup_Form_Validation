<!DOCTYPE HTML>  
<html>
<head>
<?php
include "librerias.php";
?>
</head>
<body>
<?php
include "../controlador/CtrlForm.php";
?>
<div class="form-popup" id="myForm">
	<form class="form-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<p>
		<span class="error">
		* Campos obligatorios
		</span>
		</p>
		<h1>Escríbenos...</h1>
		<div id="name">
			<label for="name">Nombre:</label>
			<span class="error">* <?php echo $nameErr;?></span>
			<input type="text" name="name" value="<?php echo $name;?>">
		</div>
		<div id="email">
			<label for="email">E-mail:</label>
			<span class="error">* <?php echo $emailErr;?></span>
			<input type="text" name="email" value="<?php echo $email;?>">
		</div>
		<div id="website">
			<label for="website">Sitio Web:</label>
			<span class="error"><?php echo $websiteErr;?></span>
			<input type="text" name="website" value="<?php echo $website;?>">
		</div>
		<div id="gender">
			<label for="gender">
			<b>Género:</b>
			<span class="error">* <?php echo $genderErr;?></span>
			</label>
			
			</br>
			
			<div style="float:right; margin-right:90px;">
				<input class="gender" type="radio" name="gender" <?php Genero("Femenino"); ?> value="Femenino"> Femenino</br>
				<input class="gender" type="radio" name="gender" <?php Genero("Masculino"); ?> value="Masculino"> Masculino</br>
				<input class="gender" type="radio" name="gender" <?php Genero("LGBTI"); ?> value="LGBTI"> LGBTI</br>  
			</div>  
		</div>
		<div id="comment" style="float:right; margin-top:10px; margin-right:10px;">
			<label for="comment">Comentario:</label>
			<textarea id="comment" name="comment" rows="4" cols="80"><?php echo $comment;?></textarea>
		</div>
		<input type="hidden" name="llave" value="<?php echo $llave;?>">
		<div id="botones">
			<table>
			<tr>      
				<td>
					<button id="close" type="button" class="btn cancel" onclick="closeForm()">
					Close
					</button>		  
				</td>
				<td>
					<button id="btnBack" type="button" class="btn cancel" onclick="back()">
					back
					</button>		  
				</td>		
				<td>
					<button id="btnNext" type="button" class="btn" onclick="next()">
					Siguiente
					</button>		  
				</td>
				<td>
					<input onclick="closeForm()" id="submit" type="submit" class="btn" name="submit" value="Submit">		  
				</td>
			</tr>
			</table>		
		</div>
	</form>
</div>

<button class="open-button" onclick="openForm()">Open Form</button>
<script src="../Librerias/js/pop.js"></script>

</body>
</html>