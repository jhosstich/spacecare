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
    que va a hacer mañana, todos somos partícipes puesto que usamos estos servicios a diario 
    y por lo tanto somos indirectamente causantes de esta basura espacial puesto que consumimos 
    estos servicios cada vez más.
    <br></p>
    <div class="col-md-8 my-3 mx-auto">
        <img class=" w-100" src="/img/slider/people.jpg">
    </div>
    <p class="col-md-8 mx-auto col-12">
    Que no veamos a simple vista la basura espacial no significa que no esté, 
    si no controlamos y desarrollamos un sistema que funcione para evitar y 
    reducir la basura espacial, nuestras órbitas quedarán inutilizadas y 
    perderemos todos los recursos que hemos estado utilizando hasta ahora, 
    además de graves problemas medioambientales.
    </p>
    <div class="col-md-8 my-3 mx-auto">
        <img class=" w-100" src="/img/conclusion_sky.jpg">
    </div>

</div>

@endsection