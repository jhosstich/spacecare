@section('head')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
@endsection
@extends('layouts.app')
@section('content')
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('./img/sky.jpg');">
    <div class="filter">
    </div>
    <div class="row">
        <h1 class=" col-12 mt-5" style="color:white; z-index: 2;">CONCLUSIÓN</h1>
        <a class="mt-4 text-left col-7" style="color:white; z-index: 2;" href="{{route('solutions')}}"><< Ver Posibles Soluciones</a>
        <a class="mt-4 text-right col-5" style="color:white; z-index: 2;" href="/"> Volver a Inicio</a>
    </div>
  </div>
<div class="container">
    <p class="py-4 col-md-8 mx-auto col-12">
    Todos usamos internet, hacemos llamadas telefónicas, usamos el gps y consultamos el tiempo 
    que va a hacer mañana Todos somos partícipes puesto que usamos estos servicios a diario. Por lo tanto, somos indirectamente causantes de esta basura espacial, ya que consumimos 
    estos servicios cada vez más.
    <br></p>
    <div class="col-md-8 my-3 mx-auto">
        <img class=" w-100" src="/img/slider/people.jpg">
    </div>
    <p class="col-md-8 mx-auto col-12">
    Que no veamos a simple vista la basura espacial no significa que no esté. 
    Si no controlamos y desarrollamos un sistema que funcione para evitar y 
    reducir la basura espacial, nuestras órbitas quedarán inutilizadas y 
    perderemos todos los recursos que hemos estado utilizando hasta ahora, 
    además de graves problemas medioambientales.
    </p>
    <div class="col-md-8 my-3 mx-auto">
        <img class=" w-100" src="/img/conclusion_sky.jpg">
    </div>


    <div class="container py-4">
    <h1>Mapa</h1>
    <div id='map' style='width:100%; height: 300px; border-width:2px; border:solid;'></div>
    </div>


</div>

@endsection

@section('script')

<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.js"></script>
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiZWxwbWFwcyIsImEiOiJja2pqc3pjaW4ydmh2MzFzY3c0ZDRyYjZ4In0._CIkbIg4S6fDtBvvKs4ZAA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/elpmaps/ckjjtbr6k0yhp19mmsjsge8eb/draft'
  });
</script>
@endsection