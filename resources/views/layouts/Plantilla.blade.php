<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href=" {{ url('css/app.css')}}">
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
       <li><i><a href="Loginzap.html">Registrate</a></i></li> 
      <li><i><a href="ubi.html">Ubicacion</a></i></li> 
    <li><a href="carritobueno.html">Catalogo Completo</a></li>
    <li><a href="Carrito-Ellas"> Mujer</a>
      <ul> 
      <LI><a href="Botas.html"> Botas</a></LI>
      <li><a href="Zapatillas.html">Tacon</a></li>
      <li><a href="Sandalias.html">Sandalias</a></li>
      <li><a href="Confort.html">Confort</a></li>
      <li><a href="Flats.html"> Flat</a></li>
      <li><a href="Tenis,html">Tenis</a></li>
      </ul>
      </li>
    </li>
         <li><a href="Carrito-niñas.html">Niñas</a>
          <UL>
         <LI><a href="tenis-ni.html">Tenis</a></LI>
         <LI><a href="zapato-ni.html">Zapatos</a></LI>
        <li><a href="escolar-ni.html">Escolar</a></li>
        <LI><a href="Zapato-Escolarni.html">Zapatos</a></LI>
        <LI><a href="Tenis-Escolarni.html">Tenis</a></LI>
         <li><a href="casual-ni.html">Comun</a></li>
        <LI><a href="Zapato-Casualni.html">Zapatos</a></LI>
        <LI><a href="Tenis-Casualni.html">Tenis</a></LI></UL></li>
        <li><a href="Carrito-niños">Niños</a>
          <Ul>
        <LI><a href="tenis-no.html">Tenis</a></LI>
         <LI><a href="zapato-no.html">Zapatos</a></LI>
        <li><a href="escolar-no.html">Escolar</a></li>
        <LI><a href="Zapato-Escolar.html">Zapatos</a></LI>
        <LI><a href="Tenis-Escolar.html">Tenis</a></LI>
         <li><a href="casual-no.html">Comun</a></li>
        <LI><a href="Zapato-Casual.html">Zapatos</a></LI>
        <LI><a href="Tenis-Casual.html">Tenis</a></LI>
      </ul>
    </li>
      
       <li><a href="Carrito-ellos"> Caballero</a>
      <ul>
      <LI><a href="Conforth.html">Comun</a></LI>
      <li><a href="Zapatosh.html">Vestir</a></li>
      <li><a href="Tenish.html">Tenis</a></li>
      <li><a href="Botash.html">Botas</a></li>
      </ul></li>
   </div>
<br>
<br>
  </div>
  <img src="{{url('css/carrito.png')}}" style="width:60px;border-radius: 11px; height :60px; background-color:#008080; position: absolute; top:66px;left:1280px;"><a href=""></a>
      </div>
      <img src="{{url ('css/logotum.png')}}" width="40"
      height="40" border="2" style="position: absolute;top: 80px;left:122px"  ></img>
  <br>

  @yield('contenido')
    
<div class="divic">
  <p></p>
</div>
<div class ="marr"></div>
    <div id="pie">
        <div class="comun1">                 <!-- primera columna-->

        <h3>Mas informacion</h3>
        <P> Visitanos en nuestras sucursales </P>
        <H3>¿Quieres ganar dinero?</h3>
        <h4>¿Tienes tiempo suficientes?</h4>
        <br>
        <h4>¿Tienes experiencia en ventas?</h4>

          <p><a href="uneteno.html"> Unetenos</a></p>
        </div><br>
       <div class="colum2">
       <h3>Redes sociales</h3>
       <div class="fac">
         <img src="{{url ('css/fac.png')}}">
         <label>siguenos en Facebook</label>
        </div>MilesTokiLiz04
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
                 <!-- contenedor de la ubicacion para ponerla en el pie -->

  <div class="ub"style="position:absolute;top:10px;left:850px;
  border-radius:21px;background:#D7EDCC;width:250px; height:250px; padding: 100px; display: flex;">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.445009721198!2d-99.0744146502136!3d19.3498746482723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fd8581706f93%3A0x8568d6fe26195179!2sErmita%20Iztapalapa%2C%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1603814593109!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" align="hight" style="border:1; display: flex;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
</div>

       <div class="footer">
       <div class="copy">
       © 2008 - 2021 Semrush. Todos los derechos reservados.
       <br>
         <a href=""> Informacion Compañia|</a><a href="">Privacio y Politicas|</a> <a href="" 
          >Terminos y Codiciones</a>
       </div></div>

</div>
</body>
</html>
</header>
