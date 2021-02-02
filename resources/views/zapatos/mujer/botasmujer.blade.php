@extends('layouts.Plantilla')

@section('titulo','Botas para mujer')

@section('contenido')
<?php
   session_start();
 ?>

  <div align="center">
    <h3> Catalogo General </h3>

    <a href="{{route('zapateria.compra')}}"><img src="./imagenes/carrito1.jpg" width="50px;"></a>
    <hr>

    <table >
    <thead>
        <th> ID </th>
        <th> PRODUCTO </th>
        <th> DECRIPCION </th>
        <th> ACCIONES </th>
    </thead>
    <tbody>
         <tr style="width: 600px;">
           <td style="width: 100px;"> 1000 </td>

           <td style="width: 100px;">
           <img src="./productos/Ellas1.jpg" width="100px;" height="100px">
           </td>

           <td style="width: 300px;">
             Descripción:<br> $645MXN | DEPARTAMENTO	ZAPATOS,<br>GÉNERO	DAMA,<br>CATEGORÍA	BOTAS Y BOTINES |
          </td>
          <td style="width: 300px;">
            <form class="forsm"action="{{route('zapateria.botasmujer')}}" method="GET">
              <input type="hidden" name="txtProducto" value="BOTA DE MONTAR TIERRA BENDITA 1004">
              <input type="number" name="cant" value="1" style="width: 50px;"><br>
              <input type="hidden" name="txtPrecio" value="645">
              <input type="submit" name="btnAgregar" value="Agregar">
            </form>
          </td>

        </tr>

        <tr style="width: 600px;">
          <td style="width: 100px;"> 1001 </td>

          <td style="width: 100px;">
          <img src="./productos/Ellas2.jpg" width="100px;" height="100px">
          </td>

          <td style="width: 300px;">
            Descripción:<br> $699MXN | DEPARTAMENTO	ZAPATOS,<br>GÉNERO	DAMA,<br>CATEGORÍA	BOTAS Y BOTINES |
         </td>
         <td style="width: 300px;">
           <form action="{{route('zapateria.botasmujer')}}" method="GET">
             <input type="hidden" name="txtProducto" value="BOTA DE VESTIR SAO PAULO 9CC3">
             <input type="number" name="cant" value="1" style="width: 50px;"><br>
             <input type="hidden" name="txtPrecio" value="699">
             <input type="submit" name="btnAgregar" value="Agregar">
           </form>
         </td>

       </tr>
    </table>
  </div>
<?php
if (isset($_REQUEST["btnAgregar"])) {
  $producto = $_REQUEST["txtProducto"];
  $cantidad = $_REQUEST["cant"];
  $precio = $_REQUEST["txtPrecio"];

  $_SESSION["carrito"]["$producto"]["cant"]=$cantidad;
  $_SESSION["carrito"]["$producto"]["precio"]=$precio;

  echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
}

 ?>




<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>

@endsection