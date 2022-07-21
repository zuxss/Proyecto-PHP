<?php
    class crud  {
        //Private database object
        private $db;
        //Constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        //Function to insert a new record into database
     public function insert($fname,$lname,$dob,$email,$phone,$especialidad){
            try{
                //Define the sql statement to be executed
                $sql = "INSERT INTO attendance (firstname,lastname,fechanacimiento,email,phone,especialidad) VALUES (:fname, :lname, :email, :dob, :phone, :especialidad)";
                //Prepare the SQL statement for execution
                $stmt = $this->db->prepare($sql);
                //Bind all placeholders to the actual values
                $stmt->bindParam(':fname', $fname);
                $stmt->bindParam(':lname', $lname);
                $stmt->bindParam(':dob', $dob);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':especialidad', $especialidad);
                //Execute stmt
                $stmt ->execute();
                return true;

                }catch (PDOException $e){
                    echo $e->getMessage();
                    return false;
                }

         }   
    }
    

?>