@extends('layouts.Plantilla')

@section('titulo','Inicio de sesion')

@section('contenido')






<div align="center">
	<form id="from" action=""  method="" autocomplete="off">
		<div align="center">
               <img src="{{url('css/usu.jpg')}}" id="imga">
 </div>
		<label id="lbl-inicio"> login </label>
	<br>
	<br>
	<label id="lbl">Numero de trabajador:</label>
		<input type="text" name="usuario" id="usuario"maxlength="4"  placeholder="ingresa tu numero de trabajador"required/>
		<br>
               <td> <br><label id="contar">password:</label><input name="contar" type="password" id="contraseña" placeholder="ingresa password" required></td>
		<br><br>
		 <br><br><input type="submit" id="submit" value="Ingresar">


    </div>
    





<br><br><br><br><br><br><br>

@endsection