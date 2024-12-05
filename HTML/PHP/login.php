<?php

include("conexion.php");

$email= $_POST['email'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    if ($row['contraseña'] === $contraseña) {
        $alerta = "Se inició sesión" ;
        $redireccionar = true;
    } else {
        $alerta = "El email y la contraseña no coinciden";
        $redireccionar = false;
    }
} else {
    $alerta = "El email y la contraseña no coinciden";
    $redireccionar = false;
}

mysqli_close($conexion);

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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </header>


            <div class="alert alert-info alert-dismissible fade show py-5 mt-5 mb-5 text-center" role="alert">
                <h3 class="my-auto"><?php echo $alerta; ?></h3>
                <?php if (isset($redireccionar) && $redireccionar): ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='../proyecto/inicio_iniciado.html'"></button>
                <?php else: ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location.href='../proyecto/inicio.html'"></button>
                <?php endif; ?>
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