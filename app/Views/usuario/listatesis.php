</br></br>
<div class="container">
<br><br>
  <a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/usuario/crearTesis" role="button">Agregar Tesis</a>
  </br></br>
  <table class="table" id="tb3">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Tesista</th>
        <th scope="col">Tema</th>
        <th scope="col">Descripción</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($tesis as $tes) :
      ?>
        <tr tesisID = "<?php echo $tes['id_tesis'] ?>">
          <th scope="row"> <?php echo $tes['id_tesis'] ?></th>

          <?php echo "<td>" . $tes['tesista'] . "</td>" ?>
          <?php echo "<td>" . $tes['tema_tesis'] . "</td>" ?>
          <?php echo "<td>" . $tes['descripcion'] . "</td>" ?>
          <td><a class="btn btn-primary" href="<?php echo base_url(); ?>/index.php/Usuario/verTesis/<?php echo $tes['id_tesis'] ?>" role="button">Abrir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script>

  $(document).ready( function () {
      $('#tb3').DataTable({
          language: Lenguaje
      });
  })
</script>