<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
    <link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href=" {{ url('css/app.css')}}">
<h5 style="font-size: 20px;color:#2C3E50 ;margin-right:9px;padding:4px;display: flex;font-family: sans-serif;position: absolute; top: 120px; left: 400px; ">
    ___________zapateria Tulip___________</h5><img src="{{url('logotum.png')}}" width="100"
     height="100" border="2" style="position: absolute;top:110px;left:850px;"  ></img>
          </head>
          <div id= "marg2"></div>
          <div id="inicio2">
           <h5>__________zapateria Tulip__________</h5>     
              <div id="header2">
              <ul class="nav2">
          
                <li><a href="{{route('zapateria.inicio')}}">Inicio</a></li>
                 <li><i><a href="{{route('zapateria.conocenos')}}">Conocenos</a></i> </li>
                 <li><i><a href="{{route('zapateria.registrate')}}">Registrate</a></i></li> 
                <li><i><a href="ubi.html">Ubicacion</a></i></li> 
              <li><a href="carritobueno.html">Catalogo Completo</a></li>
          
              <li><a href="Carrito-Ellas"> Mujer</a>
                <ul> 
                <LI><a href="Botas.html"> Botas</a></LI>
                <li><a href="Zapatillas.html">Tacon</a></li>
                <li><a href="Confort.html">Confort</a></li>
                <li><a href="Tenis,html">Tenis</a></li>
                </ul>
                </li>
              </li>
              <li><a href="Carrito-niñas.html">Niñas</a>
                  <UL>
                   <LI><a href="tenis-ni.html">Tenis</a></LI>
                   <LI><a href="zapato-ni.html">Zapatos</a></LI>
                  <li><a href="escolar-ni.html">Escolar</a></li></ul></li>
              <li><a href="Carrito-niños">Niños</a>
                  <Ul>
                  <LI><a href="tenis-no.html">Tenis</a></LI>
                   <LI><a href="zapato-no.html">Zapatos</a></LI>
                  <li><a href="escolar-no.html">Escolar</a></li>
                </ul>
              </li>
                
                 <li><a href="Carrito-ellos"> Caballero</a>
                <ul>
                <LI><a href="{{route('zapateria.conforth')}}">Comun</a></LI>
                <li><a href="{{route('zapateria.vestirhombre')}}">Vestir</a></li>
                <li><a href="Tenish.html">Tenis</a></li>
                <li><a href="Botash.html">Botas</a></li>
                </ul></li>
             </div>
          <br>
          <br>
            </div>
            <img src="{{url('css/carrito.png')}}" style="width:60px;border-radius: 11px; height :60px; background-color:#008080; position: absolute; top:40px;left:1100px;"><a href=""></a>
                </div>
                <img src="{{url ('css/logotum.png')}}" width="40"
                height="40" border="2" style="position: absolute;top: 80px;left:122px"  ></img>
            <br>
            @yield('contenido')

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
          </body>
          </html>
