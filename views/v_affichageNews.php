  <table class="table table-bordered table-responsive table-striped">
    <tr>
      <td> ID </td>
      <td> Nom </td>
      <td> Description </td>
    </tr>
    <?php
    foreach ($lesNews as $news) {
      ?>
      <tr>
        <td> <?php echo $news['id'] ?></td>
        <td> <?php echo $news['nom'] ?></td>
        <td> <?php echo $news['description'] ?></td>
      </tr>
      <?php
    }
    ?>
  </table>
