<section class="content">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Nueva meta</h1>
			<ol class="breadcrumb">
				<li><a href="./?view=index"><i class="fa fa-dashboard"></i> Panel</a>
				</li>
				<li><a href="./?view=unidades"><i class="fa fa-lightbulb-o"></i>
						Metas</a></li>
				<li class="active"><i class="fa fa-asterisk"></i> Nueva meta</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">

		<form role="form" method="post" action="./?action=addmeta"
			enctype="multipart/form-data">
			<div class="col-lg-5">
				<div class="form-group">
					<label>Asistencia Sacramental</label> <input type="number"
						name="asist_sacr" class="form-control"
						placeholder="Asistencia a la reunion sacramental">
				</div>

				<div class="form-group">
					<label>Asistencia Melquisedec</label> <input type="number"
						name="asist_melq" class="form-control"
						placeholder="Asistencia a las reuniones del sacerdocio" required>
				</div>

				<div class="form-group">
					<label>Consejo de Barrio?</label> <select name="consejo"
						class="form-control" required>
						<option value="">-- SELECCIONE SI/NO --</option>
						<option value=1>SI</option>
						<option value=0>NO</option>
					</select>
				</div>

				<div class="form-group">
					<label>Comite Ejecutivo?</label> <select name="comite"
						class="form-control" required>
						<option value="">-- SELECCIONE SI/NO --</option>
						<option value=1>SI</option>
						<option value=0>NO</option>
					</select>
				</div>

				<div class="form-group">
					<label>Bautismos</label> <input type="number" name="bautismos"
						class="form-control" placeholder="Bautismos en la Semana">
				</div>

				<button type="submit" class="btn btn-primary">Agregar</button>

			</div>
			<div class="col-lg-5">
				<div class="form-group">
					<label>Recomendaciones Activas</label> <input type="number"
						name="rec_activas" class="form-control"
						placeholder="Cantidad de Recomendaciones Activas">
				</div>

				<div class="form-group">
					<label>Recomendaciones Vencidas</label> <input type="number"
						name="rec_vencidas" class="form-control"
						placeholder="Cantidad de Recomendaciones Vencidas">
				</div>

				<div class="form-group">
					<label>Orientaci&oacuten Familiar</label> <input type="number"
						name="orientacion" class="form-control"
						placeholder="Visitas de Maestros Orientadores en la Semana">
				</div>

				<div class="form-group">
					<label>Maestras Visitantes</label> <input type="number"
						name="visitas" class="form-control"
						placeholder="Visitas de Maestras Visitantes en la Semana">
				</div>
			</div>
		</form>
		<div class="col-lg-3"></div>
	</div>
	<!-- /.row -->
	<br> <br> <br> <br> <br>
</section>