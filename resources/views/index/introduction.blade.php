@extends('layouts.app')
@section('content')
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('./img/sky.jpg');">
    <div class="filter">
    </div>
    <div class="row">
        <h1 class=" col-12 mt-5" style="color:white; z-index: 2;">INTRODUCCIÓN</h1>
        <a class="mt-4 text-right col-12" style="color:white; z-index: 2;"href="{{route('actual.situation')}}"> Ver Situación Actual >></a>
    </div>

  </div>
<div class="container">
    <p class="py-4 col-md-8 mx-auto col-12">
        <br>
        <span class="sel">La basura espacial son desechos de naves espaciales abandonadas, soportes para múltiples cargas y desechos liberados intencionadamente durante las misiones espaciales.</span> Resumiendo, todos los desechos residuales de la actividad espacial.
        <br> 
        <br>
        Estos desechos cuando colisionan unos con otros lo hacen a una velocidad de 10 km/s y pueden llegar hasta unos 15 km/s que es 10 veces más que la velocidad de una bala.
        <br>
        
        <a href="https://giphy.com/gifs/space-earth-junk-IMB5vzQ9SajWU"><img class="py-3" src="https://media1.giphy.com/media/IMB5vzQ9SajWU/giphy.gif?cid=ecf05e47xaidfmsyjrkqlxnvh1ghk7nikv8buhxvrr3r6kb5&rid=giphy.gif" width="100%" ></a>

        <span class="sel">Según la NASA existen alrededor de 20.000 objetos del tamaño de una pelota de balonmano; más de 500.000 objetos del tamaño de una canica o más grandes, y millones de piezas más pequeñas aún, que no se pueden identificar. Todos estos desechos viajan a una velocidad media de 17,500 millas por hora.  
        </span><br>
        Los principales riesgos que provocan estos residuos son las posibles colisiones con satélites funcionales, naves con tripulación o la estación internacional. Los grandes fragmentos son fáciles de localizar y monitorizar. Por lo tanto, dichas colisiones se podrían evitar, esquivándolos o retirando estos derbis. Los más problemáticos son los que no se han localizado por su pequeño tamaño.
    </p>

    <hr class="mt-5">
    <p class="mt-4">
        <strong>BIBLIOGRAFÍA </strong> <br>
    </p>

</div>

@endsection