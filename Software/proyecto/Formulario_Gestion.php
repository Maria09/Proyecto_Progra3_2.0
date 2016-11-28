


<?php 	include'header.php'; ?>

</div>
<div class="espacio"></div>


<link rel="stylesheet" type="text/css" href="css/gestion_estilo.css">


<div id="container">
	

<details id="details1">
	<summary><h1 id="Gestion" align="center">Registrar Gestión</h1> </summary>
	<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="txt_idGestion">Id Gestión</label>
			</div>

			<div class="col-md-6" id="formInput">
				<div class="form-group">
					<input class="form-control" type="text" id="txt_idGestion">
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="cmb_idUsuario">Id Usuario</label>
			</div>

			<div class="col-md-6" id="formSelect">
				<div class="form-group">
					<select id="cmb_idUsuario">
						

					</select>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="cmb_idCliente">Id Cliente</label>
			</div>

			<div class="col-md-6" id="formSelect">
				<div class="form-group">
					<select id="cmb_idCliente">
						
						
					</select>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="txt_codRef">Código Referencia</label>
			</div>

			<div class="col-md-6" id="formInput">
				<div class="form-group">
					<input class="form-control" type="text" id="txt_codRef">
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="txt_fechaSeg">Fecha Seguimiento</label>
			</div>

			<div class="col-md-6" id="formInput">
				<div class="form-group">
					<input class="form-control" type="text" id="txt_fechaSeg">
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="txt_detalleSeg">Detalle Seguimiento</label>
			</div>

			<div class="col-md-6" id="formInput">
				<div class="form-group">
					<input class="form-control" type="text" id="txt_detalleSeg">
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="txt_detalleSeg">Estado Seguimiento</label>
			</div>

			<div class="col-md-6" id="formInput">
				<div class="form-group">
					<input class="form-control" type="text" id="txt_detalleSeg">
				</div>
			</div>
		</div>


	
		<div class="row">
			<div class="col-md-2" id="formLabel">
				<label for="cmb_tipoGes">Tipo Gestion</label>
			</div>

			<div class="col-md-6" id="formSelect">
				<div class="form-group">
					<select id="cmb_tipoGes">
						
						
					</select>
				</div>
			</div>
		</div>




		<div class="row">

			<div class="col-md-4" id="formBoton">
				<div class="col-md-8">
					<button  id="btn_registrarGestion">Registrar Gestión</button>
				</div>
			</div>
		</div>


</details>
	

</div>



<div class="espacio"></div>
<div id="footer">
<?php include'footer.php'; ?>