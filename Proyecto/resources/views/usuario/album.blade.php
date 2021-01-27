@extends('layouts.appNavegando')

@section('content')
<section class="contenedor">
	<section class="grid" id="grid">
		@foreach($albumes as $album)
			<p>{{$album -> nombreAlbum }}</p>
			@foreach($croms as $crom)
				<div class="item" data-descripcion= "{{$crom->descripcion}}">
					<article class="item-contenido">
						<img src="{{ asset('storage').'/'.$crom->imgCromo}}" alt="cromo" width="200px" height="200px">
					</article>
				</div>
			@endforeach
		@endforeach
	</section>
	
	<section class="barraPaginacion">
		{{ $croms->links() }}
	</section>

	<section class="overlay" id="overlay">
		<div class="contenedor-img">
			<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
			<img src="" alt="contenedor">
		</div>
		<p class="descripcion"></p>
	</section>
		
</section>


<script src="../../js/main.js"></script> 

<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

@endsection