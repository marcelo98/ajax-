<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Ajax</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.3.js"></script>

	<style>
		select , label {
			font-size:18px;
			color:black;
			font-weight:bold;
	}
	</style>
</head>
<body>
 <div class="row">
    <div class="col-xs-3">
      <div class="form-group">
            <label for "nombre">Por Favor Ingrese Sus Nombres</label>
            <input id = "username" type="text" class="form-control"> 
          </div>

          <div class="form-group">
            <label for ="apellidos">Por Favor Ingrese Sus Apellidos</label>
             <input id ="apellidos" type="text" class="form-control"> 
          </div>
    </div>
        <div class="col-xs-3">
		<form action="#">
			<legend><strong>Seleccione Un Grado: </strong></legend>
			<select id="selectGrado" name="selectGrado"  class="form-control">
				<option value="Seleccione">Seleccione</option>
				<option value="Primero">Primero</option>
				<option value="Segundo">Segundo</option>	
				</select>

			<div id="resultado">
				<legend><strong>Seleccione Un Grupo: </strong> </legend>
				<select id="selectAlumno" name="selectAlumno" class="form-control"> </select>
			</div>

			<div id="resultado2">
				<legend><strong>Seleccione Una Materia: </strong></legend>
				<select id="selectmateria" name="selectmateria" class="form-control"></select>
			</div> 
		</form>

		<script>
			//Funcion de JQuery
			$("#selectGrado").change(function() {
				var gradoVal = $("#selectGrado").val();
				$.ajax({
					method: "POST",
					url: "procesarAjax.php",
					data: { grado: gradoVal}
				})
				.done(function( msg ) {
					$("#selectAlumno").html(msg);
				});
			});
		</script>

		<script>
			$("selectmateria").change(function(){
				var materiaVal = $("#selectmateria").val();
				$.ajax({
					method: "POST",
					url:"procesarAjax.php",
					data: { materia: materiaVal}
				})
				.done(function(msg){
					$("#selectmateria").html(msg); 
				}); 
			});
		</script>
	</div>
 </div>
</body>
</html>