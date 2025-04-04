<?php  
//session_start()

?>

<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label class="form-label">Nombre del Juego</label>
    <input type="text" class="form-control" id="cate" placeholder="Ingrese un nombre" name="nomjuego">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Categoria</label>
    <select id="cars" class="form-control">
      <option value="">[seleccione una categoria]</option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
    </select>
  </div>
  <div class="mb-3 mt-3">
    <label class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" placeholder="Ingrese un precio" name="precio">
  </div>
  <div class="mb-3 mt-3">
    <label class="form-label">Existencias</label>
    <input type="text" class="form-control" id="existencia" placeholder="Ingrese las existencia" name="existencia">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Imagen</label>
  </div>
   <div class="mb-3 mt-3">
    <label class="form-label">Clasificacion</label>
    <input type="text" class="form-control" id="clasificacion" placeholder="Ingrese la clasificacion" name="calsificacion">
  </div>
 
  <button type="submit" class="btn btn-primary" name=ok1>Add</button>
</form>

<table class="mb-3">
  
 
</table>

<table class="table table-striped table-hover">
<tr>
    <th>ID</th>
    <th>Nombre Juego</th>
    <th>Categoria ID</th>
    <th>Precio</th>
    <th>Existencias</th>
    <th>Imagen</th>
    <th>Clasificacion</th>
    <th>Acciones</th>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <button type="submit" class="btn btn-danger" name=ok1>Delete</button>
      <button type="submit" class="btn btn-primary" name=ok1>Edit</button>
    </td>
  </tr>

</table>
