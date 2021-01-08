@extends('layouts.app')
@section('content')
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('./img/sky.jpg');">
    <div class="filter">
    </div>
    <div class="row">
        <h1 class="col-12 mt-5" style="color:white; z-index: 2;">SITUACIÓN ACTUAL</h1>
        <a class="mt-4 text-left col-6" style="color:white; z-index: 2;"href="{{route('introduction')}}"> << Ver Introducción</a>
        <a class="mt-4 text-right col-6" style="color:white; z-index: 2;"href="{{route('problem')}}"> Ver Problemáticas >></a>
    </div>
    
  </div>
<div class="container">
    <p class="py-4 col-md-8 mx-auto col-12">
    <span class="sel">Desde el comienzo de la era espacial en 1957, se han lanzado toneladas de cohetes, 
    naves e instrumentos al espacio.</span> No se tuvo en cuenta la problemática de los residuos espaciales 
    que esto provocaría y no había ningún tipo de control o vigilancia a la hora de intentar producir 
    los menores desechos posibles, por lo que el número de basura espacial no ha dejado de crecer desde entonces.
    <br>
    <img class="py-3 img-fluid" height="70" src="/img/objects_in_orbit.jpg">
    <br>

    <span class="sel">El actual problema es producido por las explosiones en órbita producidas por batería y combustible.</span> La NASA afirma que llevan años introduciendo mejoras en la eliminación de los materiales una vez finalizadas las misiones, a pesar de que el número de basura espacial no ha descendido.
    <br>
    <span class="sel">
    Al haber tanta cantidad de basura espacial en nuestra atmósfera se espera que las propias colisiones entre los residuos generarán más basura espacial que las explosiones mencionadas anteriormente.
    </span><br>
    <iframe class="my-3" src="https://www.esa.int/content/view/embedjw/484820" width="100%" height="360" ></iframe>
    Fuente: <a href="http://www.esa.int/ESA_Multimedia/Videos/2017/04/Dealing_with_space_debris">ESA</a>
    </p>

    <hr class="mt-5">
    <p class="mt-4">
        <strong>BIBLIOGRAFÍA </strong> <br>
        <a href="https://www.treehugger.com/concepts-cleaning-space-junk-4858326"> Concepts</a> - Space Junk. <br>
        <a href="https://www.sdo.esoc.esa.int/environment_report/Space_Environment_Report_latest.pdf"> Statistics</a> - Space envirement Report <br>

    </p>

</div>

@endsection