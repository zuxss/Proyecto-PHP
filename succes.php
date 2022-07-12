<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
?>
<h1 class="text-center">Registro completo</h1>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $_POST['firstname']." ".$_POST['lastname']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST['especialidad']; ?></h6>
    <p class="card-text">Nacimiento: <?php echo $_POST['fechanacimiento']; ?></p>
    <p class="card-text">Telefono:  <?php echo $_POST['phone']; ?></p>
    <p class="card-text">Email: <?php echo $_POST['email']; ?></p>
   
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php require_once 'includes/footer.php';?>