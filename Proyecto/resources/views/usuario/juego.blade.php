@extends('layouts.appNavegando')

@section('content')
<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Temáticas</h1>
    </section>
    <section class="articulos">
        @foreach($tematicas as $tematica)
            <a href="{{ route('juego.show', $tematica->id) }}" class="navTematicas">
                <article class="articulosTematica">
                    <img src="{{ asset('storage').'/'.$tematica->imgTematica}}" width="342px" height="172px" alt="tematica">
                    <h5 class="nombreTematica">{{ $tematica->nombretematica}}</h5>
                    <h6 class="h6Parte1">Album:</h6>
                    <h6 class="h6Parte2">{{ $tematica->nombreAlbum}}</h6>
                </article>
            </a>
        @endforeach
    </section>
</section>

@endsection