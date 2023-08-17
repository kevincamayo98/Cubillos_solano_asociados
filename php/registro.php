
<?php
  
       include ('cone.php');

       $sql = "INSERT INTO usuario (nombre, usuario, correo, clave) VALUES ('Test', 'Testing', 'Testing@tesing.com', '123')";
       
        if (mysqli_query($mysqli, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($cone);
        }
        mysqli_close($cone);

?>

