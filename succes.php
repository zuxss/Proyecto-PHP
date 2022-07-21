<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/connection.php'; 
    //Extract values from $_POST array 
    
    if (isset($_POST['submit'])) {

      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $dob = $_POST['fechanacimiento'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $especialidad = $_POST['especialidad'];

      $isSucces = $crud->insert($fname,$lname,$dob,$email,$phone,$especialidad);

      if ($isSucces) {
        echo '<h1 class="text-center text-success">Registro completo</h1>';
      } else {
        echo '<h1 class="text-center text-danger">Se ha producido un erro, vuelve a intentarlo</h1>';
    }
  }

?>



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