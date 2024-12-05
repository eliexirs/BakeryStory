<?php
include("conexion.php");

$id = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$fecha_nac = $_POST['fecha_nac'];


$comprobarEmail_sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultadoEmail=mysqli_query($conexion,$comprobarEmail_sql);

$comprobarUsuario_sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultadoUsuario=mysqli_query($conexion,$comprobarUsuario_sql);

#Comprueba que el correo electrónico no se encuentre en uso
if (mysqli_num_rows($resultadoEmail) > 0){
    $alerta = "La dirección de correo electrónico ya se encuentra en uso";
}else{
    if (mysqli_num_rows($resultadoUsuario) > 0){
        $alerta = "El nombre de usuario ya se encuentra en uso";
    }else{
        $sql="INSERT INTO usuarios (nombres, apellidos, usuario, contraseña, email, fecha_nac) VALUES ('$nombres','$apellidos','$usuario','$contraseña','$email', '$fecha_nac')";
        $query=mysqli_query($conexion,$sql);
        if($query){
            $alerta = "Registro exitoso </b><br>";
        } else{
            $alerta = "Error al insertar: " . mysqli_error($conexion) . "<br><br>";
        }  
        
    }   
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="..\proyecto\styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Panel de control</title>
    </head>

<body>
    <div class = "container-fluid">
    <header>
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <h4 class="navbar-brand">
                            <img src="..\proyecto\logo.png" alt="" width="40" height="40" class="d-inline-block align-text-center">
                            Bakery Story™
                        </h4>
                    </div>
                </nav>
        </header>

            
            
            
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content login">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><img src="..\proyecto\logo.png" alt="" width="40" height="40" class="d-inline-block align-text-center">Inicio de sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="input_email" class="a">Email</label>
                            <input type="email" class="form-control rosado2" id="input_email" placeholder="nombre@ejemplo.com" required>
                        </div>
                        <div>
                            <label for="input_pass" class="a">Contraseña</label>
                            <input type="password" class="form-control rosado2" id="input_pass" required>
                        </div>
                        <div class="form-check my-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label a" for="flexCheckDefault">
                              Recordarme
                            </label>
                        </div>
                        <div>
                            <p>¿No tienes una cuenta?<a href="..\proyecto\registro.html" class="a">¡Regístrate!</a></p>
                        </div>
                    </div>
                    <div class="modal-footer btn-custom">
                        <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn">Iniciar sesión</button>
                    </div>
                </div>
                </div>
            </div>

        <div class="alert alert-info alert-dismissible fade show py-5 mt-5 mb-5 text-center" role="alert">
            <h3><?php echo $alerta; ?></h3>       
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='../proyecto/registro.html'"></button>
            
        </div>

        <div class="container-fluid naranjo my-4">
                <div class="row">
                    <!-- Sección Información -->
                    <section class="col-4">
                        <div class="p-4 text-center">
                            <h2>Información</h2>
                            <p>¿Necesitas ayuda, quieres escribir una reseña o simplemente enterarte de más? Aquí encontrarás información adicional.</p>
                        </div>
                    </section>
            
                    <!-- Sección Opciones -->
                    <section class="col-4">
                        <div class="p-4 text-center">
                            <h2>Opciones</h2>
                            <div class="mb-2">
                                <a href="link1.com" target="_blank" class="text-decoration-none a">Ayuda</a>
                            </div>
                            <div class="mb-2">
                                <a href="link2.com" target="_blank" class="text-decoration-none a">Reseñas</a>
                            </div>
                            <div class="mb-2">
                                <a href="link3.com" target="_blank" class="text-decoration-none a">Cuenta</a>
                            </div>
                        </div>
                    </section>
            
                    <!-- Sección ¡Síguenos! -->
                    <section class="col-4">
                        <div class="p-4 text-center">
                            <h2>¡Síguenos!</h2>
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <a href="whatsapp.com" target="_blank" class="text-decoration-none me-2 a">WhatsApp</a>
                                <img class="icono" src="https://static.vecteezy.com/system/resources/previews/018/930/564/original/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png" alt="WhatsApp" width="24" height="24">
                            </div>
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <a href="facebook.com" target="_blank" class="text-decoration-none me-2 a">Facebook</a>
                                <img class="icono" src="https://static.vecteezy.com/system/resources/previews/018/930/698/non_2x/facebook-logo-facebook-icon-transparent-free-png.png" alt="Facebook" width="24" height="24">
                            </div>
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <a href="instagram.com" target="_blank" class="text-decoration-none me-2 a">Instagram</a>
                                <img class="icono" src="https://static.vecteezy.com/system/resources/previews/045/934/243/non_2x/instagram-logo-icon-transparent-background-free-png.png" alt="Instagram" width="24" height="24">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </body>  

        <footer>
            <p class="p">&copy; 2024 Antonella Godoy Munizaga.</p>
        </footer> 

    </div>
</body>

</html>