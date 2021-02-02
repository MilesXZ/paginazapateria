@extends('layouts.Plantilla')

@section('titulo','Registrate')

@section('contenido')

<form action="#" target="" method="get" name="formDatosPersonales">
	<div class="centrado" style="text-align: center; width:200; height:50;background-color: #5D6D7E; opacity:0.5; border-radius: 20px; float:auto;">
		<img src="{{url('css/usu.jpg')}}" style="width:60px; height:60px; border-radius:20px;" ><h4>Registrate Aquí</h4></div>

  <p style="text-align: center;">___________| Nombres |___________</p>
	<label style="text-align: center;" for="nombre">Nombre:</label>
	<input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>
  <p style="text-align: center;">___________| Apellidos |___________</p>
	<label  style="text-align: center;" for="apellidos">Apellido Paterno:</label>
	<input type="text" name="apellidos" id="apellidos" placeholder="1r Apellido"/><P>
	<label  style="text-align: center;" for="apellidos">Apellido Materno:</label>
	<input type="text" name="apellidos" id="apellidos" placeholder="2do Apellido"/>
  <p style="text-align: center;">_______| Correo Electronico |_______</p>
	<label for="email">Correo:</label>
	<input type="email" name="email" id="email" placeholder="email" required />

	<input type="submit" name="enviar" value="Enviar Datos"/>
	<input type="reset" name="borrar" value="Borrar Datos"/>
	<br>
	<img src="{{url('css/fac.png')}}"> <img src="{{url('css/inst.png')}}"> <img src="{{url('css/pin.png')}}">
	<a style="text-align: left; " href="javascript:abrir()">___¿por que?___</a></div>
</form>
<script > 
function abrir(){
  document.getElementById("ventana").style.display="block";}
function cerrar(){
  document.getElementById("ventana").style.display="none";}

</script>

<div id="ventana">

<div id="barr"> <a href=" javascript:cerrar()">   <img src="{{url('css/cerrar.png')}}" style=" width:30px; height:40px;"></div>
<div class="conte"><h1>Te enviamos promociones </h1>
  <h3> Registrate con nosotros y te enviaremos promociones a tu correo electronico. <P> No te pierdas de las promociones</h3>
  <img src="{{url('css/miku.gif')}}" style="position: absolute; top:75px; width:220px; height: 230px; left:60px; "> 
</div>
</div>
<br><br><br><br><br><br><br>
@endsection