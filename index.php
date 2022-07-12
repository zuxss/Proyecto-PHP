<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/connection.php';
?>

    <h1 class="text-center">Registration</h1>

    <form method="post" action="succes.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
           
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
           
        </div>

        <div class="mb-3">
            <label for="fechanacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento">
           
        </div>

        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <select class="form-select" id="especialidad" name="especialidad">
                <option selected>...</option>
                <option value="Desarrollador FrontEnd">Desarrollador FrontEnd</option>
                <option value="2">Desarrollador BackEnd</option>
                <option value="3">Desarrollador Fullstack</option>
            </select>
           
        </div>
        
        <div class="mb-3">
             <label for="email" class="form-label">Email </label>
             <input type="email" class="form-control" id="email" name="email">
            
        </div>

        <div class="mb-3">
             <label for="phone" class="form-label">Teléfono </label>
             <input type="phone" class="form-control" id="phone" name="phone">
            
        </div>
  
       
    <button type="submit" name="submit"class="btn btn-primary">Submit</button>
</form>
<?php require_once 'includes/footer.php';?>