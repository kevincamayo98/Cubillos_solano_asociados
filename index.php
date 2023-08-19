<?php
        /require_once  BASE_DIR  '/php/cone.php';/
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cubillos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">iniciar sesión</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__Registrarse">Registrarse</button>
                </div>
            </div>
            <!--login y registro-->
            <div class="contenedor__login-registro">
                <!--login-->
                <form action="" class="formulario__login">

                    <h2>Iniciar sesión</h2>
                    <input type="email" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!--registro-->
                <form action="index.php"  method="post" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo">
                    <input type="email" placeholder="Correo electronico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button type="submit" >Registrarse</button>
                </form>


            </div>

        </div>



    </main>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="asset.js_0.1.9/js/scrip.js"></script>

</body>
</html>



<?php
  
  include ('php/cone.php');
  

       $sql = "INSERT INTO usuarios (id, nombre, usuario, correo, clave) VALUES (1, 'Test', 'Testing', 'Testing@tesing.com', '123')";

        if (mysqli_query($cone, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($cone);
        }
        mysqli_close($cone);

?>
