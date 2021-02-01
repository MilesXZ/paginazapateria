@extends('layouts.Plantilla')

@section('titulo','Inicio')

@section('contenido')
<div id=carr>
    <div id="page">
       <section>
           <input type="radio" name="slider-select-element" id="element1" checked="checked" />
           <input type="radio" name="slider-select-element" id="element2" />
           <input type="radio" name="slider-select-element" id="element3" />
           
           <div id="slider-container">
               <div id="slider-box">
                   <div class="slider-element">
                       <article class="element-red">
                           
                       </article>
                   </div>
                   <div class="slider-element">
                       <article class="element-green">
                           
                       </article>
                   </div>
                   <div class="slider-element">
                       <article class="element-blue">
                           
                       </article>                            
                   </div>
               </div>
           </div>
           
           <div id="slider-arrows">
               <label for="element1"></label>
               <label for="element2"></label>
               <label for="element3"></label>
           </div>
       </section>            
   </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 style="text-align: center; color:#2C3E50;size: 120; ">____zapateria Tulip
__________</h1>
<br>
<br>
<br>
<br>
<div id= mar>
<div class="container"> 
       <div class="card">
           <img src="{{url ('css/m.jpg')}}"><h1>PARA ELLA</h1><p>Coleccion para Dama Primavera 2021</p> <a href="Carrito-ellas.html"> Ir</a>
      </div>
       <div class="card">
           <img src="{{url ('css/h.jpg')}}"><h1>PARA EL</h1><p>Coleccion para Caballero Primavera 2021</p> <a href="Carrito-ellos.html"> Ir</a>
      </div>
       <div class="card">
           <img src="{{url ('css/niña.jpg')}}"><h1>PARA NIÑAS</h1><p>Coleccion para Niñas Primavera 2021</p> <a href="Carrito-niñas.html"> Ir</a>
        </div>
        <div class="card">
           <img src="{{url ('css/niño.jpg')}}"><h1>PARA NIÑOS</h1><p>Coleccion para Niños Primavera 2021</p> <a href="Carrito-niños.html"> Ir</a>
        </div>
  
 </div>

</div>

@endsection

