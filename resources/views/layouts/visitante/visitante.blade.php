<!DOCTYPE html>
<html>
<head>
	<title>Clínica_DPets - Inicio</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<div class="hero">
		<nav>
			<h2 class="logo">Clínica_D<span>Pets</span></h2>
			<ul>
				<li><a href="{{ route('index') }}">Menú Inicial</a></li>
				<li><a href="{{ route('acerca') }}">Acerca de Nosotros</a></li>
				<li><a href="{{ route('horario') }}">Horario de Atención</a></li>
				<li><a href="{{ route('cita') }}">Obtener Cita</a></li>
				<li><a href="{{ route('login') }}">Iniciar sesion</a></li>
				<li><a href="{{ route('register') }}">Registrate</a></li>				
			</ul>
		</nav>

        @yield('contenidoPrincipal')
		@yield('acerca')
		@yield('cita')
		@yield('galeria')
		@yield('horario')
		@yield('registro')


	<script src="{{ asset('js/mdb.min.js') }}" ></script>
	<script src="{{ asset('js/main.js') }}" ></script>

    <footer>
		<p>¡ Bienvenidos a la Clínica No. 1 del Pais !</p>
		<p>Siguenos en nuestras redes sociales para no perderte nada.</p>
		<div class="social">
			<a href="https://www.facebook.com/arturoisrael.tolentinomorales"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.instagram.com/cristiano/?hl=es-la"><i class="fab fa-instagram"></i></a>
		</div>
		<p class="end">Todos los derechos reservados. Copyright 2022. Equipo No.5<br>___ ♦ Artuto Tolentino  ♦  Diego Sánchez  ♦  Luis Núñez  ♦ ___</p>
	</footer>
</body>
</html>