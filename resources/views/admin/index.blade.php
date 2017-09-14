@extends('admin.template.main')
@section('title','Administracion')
@section('content')
<div class="row top_tiles">
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-book"></i></div>
			<div class="count">{{ $numeroArticulos }}</div>
			<h3>Articulos</h3>
			<p>Arituclos publicados desde el origen</p>
		</div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-bookmark"></i></div>
			<div class="count">{{ $numeroTags }}</div>
			<h3>Tags</h3>
			<p>Tags registrados</p>
		</div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-filter"></i></div>
			<div class="count">{{ $numeroCategorias }}</div>
			<h3>Categorias</h3>
			<p>Categorias registradas</p>
		</div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-user"></i></div>
			<div class="count">{{ $numeroUsuarios }}</div>
			<h3>Usuarios</h3>
			<p>Usuarios registrados</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Publicacion de articulos diarios</h2>
				<div class="filter">
					<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
						<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
						<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="demo-container" style="height:280px">
						<div id="chart_plot_02" class="demo-placeholder"></div>
					</div>
					<div class="tiles">
						<div class="col-md-4 tile">
							<span>Total vistas</span>
							<h2>231,809</h2>
							<span class="sparkline11 graph" style="height: 160px;">
								<canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
							</span>
						</div>
						<div class="col-md-4 tile">
							<span>Total comentarios</span>
							<h2>231,809</h2>
							<span class="sparkline22 graph" style="height: 160px;">
								<canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
							</span>
						</div>
						<div class="col-md-4 tile">
							<span>Total ingresos</span>
							<h2>231,809</h2>
							<span class="sparkline11 graph" style="height: 160px;">
								<canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div>
						<div class="x_panel tile fixed_height_320">
							<div class="x_title">
								<h2>Categorias</h2>
								<div class="clearfix"></div>
							</div>
							@foreach ($category as $categoria)
							<div class="x_content">
								<h4>{{ $categoria->name }}</h4>
								<div class="widget_summary">
									<div class="w_center w_55">
										<div class="progress">
											<div class="progress-bar bg-green" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: {{ $categoria->articles->count() }}%;">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>
									<div class="w_right w_20">
										<span>{{ $categoria->articles->count() }} <i class="fa fa-book"></i></span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div>
						<div class="x_panel tile fixed_height_320">
							<div class="x_title">
								<h2>Tags</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
							@foreach ($tags as $tag)
								<span class="label label-default">{{ $tag->name }}</span>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection