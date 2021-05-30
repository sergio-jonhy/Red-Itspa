<html>

<head>
<title>Publicaciones</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- <link rel="stylesheet" href="../public/assets/css/style.css"> -->

</head>

<body>


</br></br></br>
<div class="container">

  <form action="<?php echo base_url(); ?>/index.php/Publicaciones/busqueda" method="POST" class="form">
    <div class="form-row align-items-center">
      <div class="col-sm-3 my-1">
        <input type="text" name="oracion" value="" class="form-control" placeholder="escribe algo...">
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Filtrar</label>
        <select class="custom-select mr-sm-2" name="filtro" id="inlineFormCustomSelect">
          <option selected>Selecciona una opción...</option>
          <option value="titulo">Titulo</option>
          <option value="tema">Tema</option>
          <option value="autores">Autores</option>
        </select>
      </div>
      <div class="col-auto my-1">
        <button class="btn btn-primary">Buscar</button>
      </div>
    </div>
  </form>
  <br><br>
  <table class="table" id="tb1">
    <thead>
      <tr class="bg-primary">
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autores</th>
        <th scope="col">Tema</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($publicaciones as $publicacion) :
      ?>
        <tr>
          <th scope="row"> <?php echo $publicacion['id_publicacion'] ?></th>

          <?php echo "<td>" . $publicacion['titulo'] . "</td>" ?>
          <?php echo "<td>" . $publicacion['autores'] . "</td>" ?>
          <?php echo "<td>" . $publicacion['tema'] . "</td>" ?>
          <td><a class="btn btn-primary" href="http://localhost/cursoCodeIgniter-Udemy/index.php/publicaciones/ver/<?php echo $publicacion['id_publicacion'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



</body>
<script>
const Lenguaje = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
}
  $(document).ready( function () {
      $('#tb1').DataTable({
          language: Lenguaje
        });
  } );
</script>

</html>