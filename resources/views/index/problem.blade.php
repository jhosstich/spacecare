@extends('layouts.app')
@section('content')
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('./img/sky.jpg');">
    <div class="filter">
    </div>
    
    <div class="row">
        <h1 class=" col-12 mt-5" style="color:white; z-index: 2;">PROBLEMÁTICAS</h1>
        <a class="mt-4 text-left col-6" style="color:white; z-index: 2;"href="{{route('actual.situation')}}"> << Ver Situación Actual</a>
        <a class="mt-4 text-right col-6" style="color:white; z-index: 2;"href="{{route('solutions')}}"> Ver Posibles Soluciones >></a>
    </div>
  </div>
<div class="container">
    <p class="py-4 col-md-8 mx-auto col-12">
    <span class="sel">La continua generación de basura espacial acabará provocando que la densidad de los objetos en la órbita baja terrestre, 
    sea lo bastante elevada como para que las colisiones entre objetos y desechos creen un efecto de cascada, en el que cada 
    impacto genere nuevos residuos que, a su vez, aumenten la probabilidad de nuevas colisiones.</span> <br>
    
    <img class="mt-4" src="https://media1.giphy.com/media/sRKb7KNOf5ftif9Ehl/giphy.gif" width="100%">
    <small class="mb-4">Fuente: <a href="https://giphy.com/gifs/EuropeanSpaceAgency-animation-space-sRKb7KNOf5ftif9Ehl?utm_source=media-link&utm_medium=landing&utm_campaign=Media%20Links&utm_term="> Gif de la agencia espacial Europea</a></small><br>

    Llegados a ese punto, ciertas órbitas alrededor de la Tierra se volverían completamente inhóspitas. 
    Se creará así el llamado síndrome de Kessler.
    <br>
    
    <span class="sel">El síndrome de Kessler, propuesto por Donald J. Kessler, dice que el volumen de basura espacial en órbita baja terrestre sería tan alto, que los objetos en órbita serían impactados, con frecuencia, por la basura, creándose así aún más basura y un mayor riesgo de otros impactos sobre otros objetos.</span> Mientras que el número de satélites en órbita crece y los viejos satélites se acumulan, el riesgo de este escenario de colisiones en cascada de Kessler, se hace mayor.
    <br>
    <img class="my-4" src="/img/Why_Space_Debris_Mitigation_is_needed_pillars.gif" width="100%">
    <small class="mb-4">Estimaciones de la ESA de cuál sería el estado de la órbita terrestre si seguimos actuando de la misma manera sin tomar medidas que reduzcan los derbis en 2209. Y estimaciones si se lleva a cabo su plan de mitigación.</small> <br>  <br>
    Cualquier impacto entre dos objetos de masa considerable creará una basura adicional de metralla, la cual creará a su vez más basura. Con una colisión lo suficientemente grande, como por ejemplo entre una estación espacial y un satélite, bastaría para generar la suficiente basura como para hacer la órbita baja de la Tierra inutilizable.
    </p>
    <hr class="mt-5">

    <p class="mt-4">
            <strong>BIBLIOGRAFÍA </strong> <br>
            <a href="https://www.sciencedirect.com/science/article/abs/pii/027311779190543S" target="_blank">  Collisional cascading </a> The limits of population growth in low earth orbit - Donald J.Kessler<br>
            <a href="https://es.wikipedia.org/wiki/S%C3%ADndrome_de_Kessler">  Síndrome de Kessler (s.f). </a> En Wikipedia. Recuperado el 02 de Enero del 2021. </a>
            <a href="https://discosweb.esoc.esa.int/ ">Base de Datos de la ESA de fragmentos</a>    <br>
            <a href="https://discosweb-api.sdo.esoc.esa.int/ ">  API web de la Base de Datos de fragmentos</a> - ESA <br>
    </p>

</div>

@endsection