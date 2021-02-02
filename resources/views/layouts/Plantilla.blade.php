<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href=" {{ url('css/car.css')}}">
</head>
<body>
<header>
<div id= "marg"></div>
<div id="inicio">
 <h5>__________zapateria Tulip__________</h5>     
    <div id="header">
    <ul class="nav">

      <li><a href="{{route('zapateria.inicio')}}">Inicio</a></li>
       <li><i><a href="{{route('zapateria.conocenos')}}">Conocenos</a></i> </li>
       <li><i><a href="{{route('zapateria.registrate')}}">Registrate</a></i></li> 
      <li><i><a href="{{route('zapateria.ubicanos')}}">Ubicacion</a></i></li> 
    <li><a href="{{route('zapateria.catalogocompleto')}}">Catalogo Completo</a></li>

    <li><a href="{{route('zapateria.mujer')}}"> Mujer</a>
      <ul> 
      <LI><a href="{{route('zapateria.botasmujer')}}"> Botas</a></LI>
      <li><a href="{{route('zapateria.tacon')}}">Tacon</a></li>
      <li><a href="{{route('zapateria.conforth')}}">Confort</a></li>
      <li><a href="{{route('zapateria.tenismujer')}}">Tenis</a></li>
      </ul>
      </li>
    </li>
    <li><a href="{{route('zapateria.niña')}}">Niñas</a>
        <UL>
         <LI><a href="{{route('zapateria.tenisniña')}}">Tenis</a></LI>
         <LI><a href="{{route('zapateria.zapatosniña')}}">Zapatos</a></LI>
        <li><a href="{{route('zapateria.escolarniña')}}">Escolar</a></li></ul></li>

    <li><a href="{{route('zapateria.niño')}}">Niños</a>
        <Ul>
        <LI><a href="{{route('zapateria.tenisniño')}}">Tenis</a></LI>
         <LI><a href="{{route('zapateria.zapatosniño')}}">Zapatos</a></LI>
        <li><a href="{{route('zapateria.escolarniño')}}">Escolar</a></li>
      </ul>
    </li>
      
       <li><a href="{{route('zapateria.hombre')}}"> Caballero</a>
      <ul>
      <LI><a href="{{route('zapateria.comun')}}">Comun</a></LI>
      <li><a href="{{route('zapateria.vestirhombre')}}">Vestir</a></li>
      <li><a href="{{route('zapateria.tenishombre')}}">Tenis</a></li>
      <li><a href="{{route('zapateria.botashombre')}}">Botas</a></li>
      </ul></li>
   </div>
<br>
<br>
  </div>
  <a href="{{route('zapateria.compra')}}"> <img src="{{url('css/carrito.png')}}" style="width:60px;border-radius: 11px; height :60px; background-color:#008080; position: absolute; top:66px;left:1170px;"></a>
      </div>
      <a href="{{route('zapateria.login')}}"><img src="{{url ('css/logotum.png')}}" width="40"
      height="40" border="2" style="position: absolute;top: 80px;left:122px"><a>
  <br>

  @yield('contenido')
    
<div class="divic">
  <p></p>
</div>
<br>
<div class ="marr"></div>
    <div id="pie">
       <div class="colum2">
       <h3>Redes sociales</h3>
       <div class="fac">
         <img src="{{url ('css/fac.png')}}">
         <label>siguenos en Facebook</label>
        </div>
        MilesTokiLiz04
         <div class="fac">
         <img src="{{url ('css/inst.png')}}">
         <label>siguenos en Instagram</label></div>
         <div class="fac">
         <img src="{{url ('css/pin.png')}}">
         <label>siguenos en Pinterest</label></div>
         <div class="colum2">
         <h3>Contactanos:</h3>
         <div class="fac">
         <img src="{{url ('css/casita.png')}}">
         <label>ubicacion: <br> Av. Luis Hidalgo Monroy
          Ciudad de México, Cd. de México</label></div>
         <div class="fac">
         <img src="{{url ('css/wat.png')}}">
         <label>Telefono: 55-48-96-23-11</label></div>
         <div class="fac">
         <img src="{{url ('css/men.png')}}">
         <label>Correo: zapateriatulip@gmail.com
 </label></div>

 <div class="ub"style="    position: absolute;
 margin: -400px 800px;
 border-radius: 21px;
 background: #D7EDCC;
 width: auto;
 height: auto;
 padding: 20px;
 display: flex;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.445009721198!2d-99.0744146502136!3d19.3498746482723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fd8581706f93%3A0x8568d6fe26195179!2sErmita%20Iztapalapa%2C%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1603814593109!5m2!1ses-419!2smx" width="300" height="300" frameborder="0" align="hight" style="border:0; display: flex;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>


</div>
</body>
</html>
</header>
