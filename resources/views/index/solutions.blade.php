@extends('layouts.app')
@section('content')
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('./img/sky.jpg');">
    <div class="filter">
    </div>
    <div class="row">
        <h1 class=" col-12 mt-5" style="color:white; z-index: 2;">POSIBLES SOLUCIONES</h1>
        <a class="mt-4 text-left col-6" style="color:white; z-index: 2;"href="{{route('problem')}}"> << Ver Problemáticas</a>
        <a class="mt-4 text-right col-6" style="color:white; z-index: 2;"href="{{route('conclusion')}}"> Ver Conclusiones >></a>
    </div>
  </div>
<div class="container col-md-8" id="solution">
        
        <p class="pt-4">
            Aunque el problema sigue creciendo, al menos ya somos conscientes de que existe y podemos empezar a buscar soluciones para resolverlo. La UNOOSA (Oficina de las naciones unidas para asuntos del espacio exterior) tiene una serie de directrices y normas que especifican cómo obtener un uso sostenible del espacio:
            <br><br>
            <strong>Directriz 1:</strong> Limitación de los desechos espaciales liberados durante el funcionamiento normal de los sistemas espaciales. <br><br>
            <strong>Directriz 2:</strong> Minimización de las posibilidades de desintegraciones durante las fases operacionales. <br><br>
        </p>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block" src="/img/slider/cnn3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block " src="/img/slider/clean_space.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block" src="/img/slider/cnn2.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <small class="mb-3">Fuente:<a href="https://edition.cnn.com/2017/06/13/tech/gallery/space-sweepers" target="_blank">CNN</a></small>
        </div>
        <p>
            <strong>Directriz 3:</strong> Limitación de las probabilidades de colisión accidental en órbita. <br><br>
            <strong>Directriz 4:</strong> Evitación de la destrucción intencional y otras actividades perjudiciales. <br><br>
            <strong>Directriz 5:</strong> Minimización de las posibilidades de que se produzcan desintegraciones al final de las misiones como resultado de la energía almacenada. <br><br>
            <strong>Directriz 6:</strong> Limitación de la presencia a largo plazo de naves espaciales y etapas orbitales de vehículos de lanzamiento en la región de la órbita terrestre baja (LEO) al final de la misión. <br><br>
            <strong>Directriz 7:</strong> Limitación de la interferencia a largo plazo de las naves espaciales y las etapas orbitales de los vehículos de lanzamiento en la región de la órbita terrestre geosincrónica (GEO) al final de la misión. <br><br>
            <strong>Directriz 8:</strong> Debería garantizarse una vigilancia continua de las actividades espaciales realizadas por entidades no gubernamentales en caso de transferencia de la propiedad o del control de un objeto espacial en órbita. <br>
            Hay diversos proyectos para el futuro que aún están en fase de desarrollo, como el de crear un robot capaz de expulsar la basura fuera de nuestra atmósfera, tarea que es muy complicada sin que el propio robot se destruya en la misión. <br>
            Otra posible solución a corto plazo para reducir la cantidad de basura espacial sería poner tarifas de uso orbital, para reducir la frecuencia de enviar objetos a la atmósfera. 
        </p>
        <hr class="mt-5">
        <p class="mt-4">
            <strong>BIBLIOGRAFÍA </strong> <br>
            <a href="https://www.unoosa.org/res/oosadoc/data/documents/2017/stspace/stspace61rev_2_0_html/V1703167-SPANISH.pdf" target="_blank">  Derecho internacional del espacio</a> -  Oficina de Naciones Unidas para Asuntos del Espacio Exterior (pag. 97)<br>
            <a href="https://en.wikipedia.org/wiki/United_Nations_Committee_on_the_Peaceful_Uses_of_Outer_Space" target="_blank">  Estados partícipes del COPUOS </a> (Comité de las Naciones Unidas sobre la Utilización del Espacio Ultraterrestre con Fines Pacíficos)
            <br><a href="https://www.esa.int/Space_in_Member_States/Spain/La_ESA_encarga_la_primera_mision_de_eliminacion_de_basura_espacial_del_mundo" target="_blank"> Misión ClearSpace-1 </a>- Agencia Espacial Europea y clearspace.today 
            <br>
        </p>
    </div>
</div>

@endsection