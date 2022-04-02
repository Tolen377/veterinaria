@extends('layouts.visitante.visitante')
@section('horario')
<div class="content">
			<h4>Menú Inicial >> Horario</h4>
			<h1>Horario <span>de Atención</span></h1>
			<h3>Consulte los días y las horas del establecimiento..</h3>
			<div class="newslatter">
				
			</div>
		</div>
	</div>

	<div class="contact-me">
		<p>Vea la galeria de fotos de nuestros pacientes caninos.</p>
		<a class="button-two" href="{{ route('galeria') }}">Ver Fotos !</a>
	</div>
@endsection
