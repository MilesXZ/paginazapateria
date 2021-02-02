@extends('layouts.Plantilla')

@section('titulo','compra')
@php
$e = "{{route('zapateria.compra')}}";
$compra = Arr::get($e, 'name');

$f = "{{route('zapateria.botasmujer')}}";
$botasmujer = Arr::get($e, 'name');
@endphp
@section('contenido')

<?php

session_start();
$total=0;
echo "<h3>Carrito de compras:</h3>";
if (isset($_SESSION["carrito"])) {

  foreach ($_SESSION["carrito"] as $indice =>$arreglo){
    echo "<hr>Producto: <strong>". $indice . "</strong><br>";
    $total += $arreglo["cant"] * $arreglo["precio"];
    foreach ($arreglo as $key =>$value) {
      echo $key .": " . $value . "<br>";
    }
    echo "<a href='$compra?item=$indice'>Eliminar Item</a>";
  }
  echo "<h3>El total de la compra es de $ $total MXN</h3>";
  echo "<br><br><a href='$botasmujer'>Regresar</a> |
     <a href='$compra?vaciar=true'>Vaciar carrito</a>";
}else{
  echo "<script>alert('El carrito esta vacio');</script>";
?>
<a href="{{route('zapatos.mujer.botasmujer')}}">Regresar</a>

<?php
}
if (isset($_REQUEST["vaciar"])) {
  session_destroy();
  header("Location:{{route('zapateria.compra')}}");
}
if (isset($_REQUEST["item"])) {
  $producto=$_REQUEST["item"];

  unset($_REQUEST["carrito"]["$producto"]);

  echo "<script>alert('Se elimino el producto: $producto');</script>";
  header("location:$compra");
}
?>





<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>

  @endsection