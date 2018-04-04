<?php require 'header.php'; ?>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">

      </div>
      <div class="col-sm-8 text-left">
        <h1>Archivos para Televisión</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <input type="text" name="año" value="">
          <input type="text" name="reunion" value="">
          <?php if ($descargado): ?>
            <div class="alert success">
              <?php echo $descargado ?>
            </div>
          <?php endif; ?>
          <input type="submit" name="submit" value="Descargar archivo">
        </form>
      </div>
      <div class="col-sm-2 sidenav">

      </div>
    </div>
  </div>
<?php require 'footer.php'; ?>
