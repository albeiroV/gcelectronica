<?php
session_start();
// Si no existe la sesión 'username' es porque no se ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // Redirige al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit;
}

?>
<html>
<body>
  <div>
  <form action="logout.php" method="post">
  <input type="submit" value="Logout">
</form>
  </div>

  <table style="border: solid">
  <tr>
    <th>Referencia</th>
    <th>Producto</th>
    <th>descripcion</th>
    <th>Cantidad</th>
    <th>Precio</th>
  </tr>
  


  <tr>
      <td>000001</td>
      <td>Computador DELL XPS</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo laudantium distinctio temporibus? Perferendis facere saepe et praesentium, sequi odio molestias neque dolores minima ex? Corporis ut commodi dolor quos neque!</td>
      <td>10</td>
      <td>6000000</td>
  </tr>
  <tr>
      <td>000001</td>
      <td>Computador DELL XPS</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo laudantium distinctio temporibus? Perferendis facere saepe et praesentium, sequi odio molestias neque dolores minima ex? Corporis ut commodi dolor quos neque!</td>
      <td>10</td>
      <td>6000000</td>
  </tr>
  
   <?php 
   /*
            foreach ($productos as $key,$producto) : ?>
            <tr class="item_row" id="${{$key}}">
              <td>{{$producto->id_producto}}</td>
              <td>{{$producto->producto}}</td>
              <td>{{$producto->descripcion}}</td>
              <td>{{$producto->precio}}</td>
              <td>{{$producto->categoria_id}}</td>
            </tr>
            <?php endforeach;
     */
    ?>
</table>
</body>
</html>
