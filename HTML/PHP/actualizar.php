<?php
include("conexion.php");

$id_usuario = $_GET['id_usuario'];

$sql="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";

$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

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
        <title>Actualizar</title>
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
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <div class="btn-group btn-custom">
                            <a href="..\proyecto\inicio.html" class="btn active" aria-current="page">Inicio</a>
                            <a href="..\proyecto\nosotros.html" class="btn">Nosotros</a>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Iniciar sesión
                            </button>
                        </div>
                        <form class="d-flex ms-auto">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        



        <!--MAIN-->
        <h1>Modificar usuario</h1>
        <main class="container-registro" >
            <form class="row g-3" action="update.php" method="POST">
                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario'] ?>">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Nombres" name="nombres" value="<?php echo $row['nombres'] ?>">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" value="<?php echo $row['apellidos'] ?>">
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="<?php echo $row['usuario'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" value="<?php echo $row['contraseña'] ?>">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $row['email'] ?>">
                </div>
                
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="color_input">Color de tu pastelería</label>
                        <input type="color" class="form-control form-control-color" id="color_input" value="#ec8fcc">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <select class="form-select" id="inputGroupSelect01" name="idioma">
                            <option selected>Idioma</option>
                            <option>Español</option>
                            <option>Inglés</option>
                            <option>Portugués</option>
                            <option>Italiano</option>
                        </select>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="date_input">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="date_input" name="fecha_nac" value="<?php echo $row['fecha_nac'] ?>">
                </div>
                <div class="col-12 d-flex justify-content-center btn-custom">
                    <input type="submit" class="btn" value="Modificar" onclick="return confirm('¿Seguro/a que desea modificar?')">
                </div>
            </form>
            
        </main>






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