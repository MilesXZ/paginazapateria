@extends('layouts.Plantilla')

@section('titulo','Conocenos')

@section('contenido')

<div id="conocenos">
    <div class="cont">
    <h1>_____conocenos________</h1>
    <cite>Zapateria tulip fue creada a base de un sueño colectivo de diversas personas.<p> Emprender un negocio donde los empleados se sientan parte de una familia mientras que brindamos un servicio de calidad a nuestros clientes<p></cite>
    <br><br>
   <h4><a href="">__Unetenos__</a> </h4><h4><a href="{{route('zapateria.inicio')}}">__Inicio__</a></h4>
    </div> 
</div>
<div id="conocenos2">
    <div class="mision">
        <img src="{{url('css/mision.png')}}">
      <h3>____Mision______</h3>
      <cite> Lograremos el mas alto nivel de satisfaccion del<p> cliente con la calificacion de nuestros empleados y productos</cite>
          <img src="{{url('css/vision.png')}}">
         <h3>__________Vision_____</h3>
         <cite>Nuestra razon de existir es la satisfaccion de nuestros clientes,
             por no tanto estamos comprometidos<p>con la calidad y eficiencia totales en <p>
             nuestro servicio y nuestros producto</cite>
         <h3>____Objetivos_____</h3>
         <cite> Posicionar a nuestras marcas dentro del segmento líder del mercado.<p>
          Incorporar permanentemente nuevas tecnologías en los procesos productivos.<p>
Desarrollar y capacitar a nuestro personal en todas las áreas, potenciando los valores de<p> profesionalismo, calidad y servicio.<p>
Crear asociaciones con los mejores proveedores y clientes del mercado, para proporcionar<p>
valor agregado a los servicios y productos que comercializamos.<p>
Respetar el medioambiente a través de un desarrollo sostenible en<p> todas las etapas involucradas en proceso productivo.</cite>	
</div></div>

@endsection