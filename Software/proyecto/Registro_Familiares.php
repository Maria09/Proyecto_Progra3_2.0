<?php 	include'header.php'; ?>


</div>
<div class="espacio"></div>

<div class="cotainer">
	<details id="details1">
		<summary><h1 id="RegisFam" align="center">Registrar Familiar</h1></summary>
		<div class="row">
			<div class="col-md-4">
				<label>Identificación del cliente:</label>
			</div>

			<div class="col-md-6">
				<select id="id_Cliente" class="select"></select>
			</div>


			<div class="col-md-4">
				<label for="#id_fam">Identificación del familiar:</label>
			</div>

			<div class="col-md-6">
				<input type="number" id="id_fam" class="input" placeholder="Digite la identificación"></input>
			</div>


			<div class="col-md-4">
				<label for="#nom_fam">Nombre del familiar:</label>
			</div>

			<div class="col-md-6">
				<input type="number" id="nom_fam" class="input" placeholder="Digite el nombre"></input>
			</div>



			<div class="col-md-4">
				<label for="#apes">Apellidos del Familiar</label>
			</div>

			<div class="col-md-6">
				<input type="number" id="apes_fam" class="input" placeholder="Digite los apellidos"></input>
			</div>



			<div class="col-md-4">
				<label for="#paren">Parentezco:</label>
			</div>

			<div class="col-md-6">
				<input type="number" id="paren" class="input" placeholder="Digite cual es el parentezcon con el cliente"></input>
			</div>

			<div class="col-md-8">
				<button id="btnRegisFam">Registrar Familiar</button>
			</div>

		</div>


	</details>
</div>










<div class="espacio"></div>
<div id="footer">
<?php include'footer.php'; ?>