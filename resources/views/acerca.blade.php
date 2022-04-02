@extends('layouts.visitante.visitante')
@section('acerca')
<div class="content">
			<h4>Menú Inicial >> Acerca de Nosotros</h4>
			<h1>Acerca de <span>Nostros</span></h1>
			<h3>Observe el propósito de la veterinaria, y su historia.</h3>
			<div class="newslatter">
				
			</div>
		</div>
	</div>
	<section class="about">
		<div class="main">
			<img src="img/main-img.png">
			<div class="about-text">
				<h2>Acerca de Nosotros</h2>
				<h5>Somos una empresa veterinaria verificada y con más de cinco años activa, ádemas de ser <span>100% mexicana.</span></h5>
				<p>Nos ubicamos en Paseo Cuauhnáhuac 566, Lomas del Texcal, Código Postal: 62574 Jiutepec, Morelos.</p>
				<button type="button">Agenda tu Cita - ¡ Ahora Mismo !</button>
			</div>
		</div>
	</section>
	<div class="contact-me">
		<p>Vea la galeria de fotos de nuestros pacientes caninos.</p>
		<a class="button-two" href="{{ route('galeria') }}">Ver Fotos !</a>
	</div>
@endsection
