@extends('layouts.visitante.visitante')
@section('cita')
<div class="content">
			<h4>Menú Inicial >> Agendar Cita</h4>
			<h1>Agenda <span>una Cita</span></h1>
			<h3>Puedes programar una cita desde esta pestaña.</h3>
			<div class="newslatter">
			</div>
		</div>
	</div>
	<div class="service">
		<div class="title">
			<h2>Nuestros Servicios</h2>
		</div>
		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Cita Médica</h5>
				<div class="pra">
					<p>Agende una cita médica en nuestras instalaciones, puede consultar nuestros horarios disponibles consultado en esta sección.</p>

					<p style="text-align: center;">
						<a class="button" href="{{ route('cita') }}">Agende una Cita</a>
					</p>
				</div>
			</div>
			<div class="card">
				<i class="far fa-user"></i>
				<h5>Cirugía Programada</h5> 
				<div class="pra">
					<p>Agende una cirujia en nuestras instalaciones, puede consultar nuestros horarios disponibles consultado en esta sección.</p>

					<p style="text-align: center;">
						<a class="button" href="{{ route('cita') }}">Programar Cirugía</a>
					</p>
				</div>
			</div>
			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Cirugía de Emergencia</h5>
				<div class="pra">
					<p>Acuda a nuestras instalaciones de inmediato, nos ubicamos en P. Cuauhnáhuac 566, Lomas del Texcal, 62574 Jiutepec, Mor.</p>

					<p style="text-align: center;">
						<a class="button" href="https://www.google.com/maps/place/The+White+House,+1600+Pennsylvania+Avenue+NW,+Washington,+DC+20500,+EE.+UU./@38.8976633,-77.0387626,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7b7bce1485b19:0x9fc7bf09fd5d9daf!8m2!3d38.8976633!4d-77.0365739">Ver en el Mapa</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-me">
		<p>Vea la galeria de fotos de nuestros pacientes caninos.</p>
		<a class="button-two" href="{{ route('galeria') }}">Ver Fotos !</a>
	</div>
@endsection
