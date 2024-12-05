<?php
include("conexion.php");


$sql = "SELECT * FROM usuarios";

$query=mysqli_query($conexion, $sql);

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
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <div class="btn-group btn-custom">
                                <a href="inicio.html" class="btn active" aria-current="page">Inicio</a>
                                <a href="nosotros.html" class="btn">Nosotros</a>
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
                            <input type="email" class="form-control rosado2" id="input_email" placeholder="nombre@ejemplo.com">
                        </div>
                        <div>
                            <label for="input_pass" class="a">Contraseña</label>
                            <input type="password" class="form-control rosado2" id="input_pass">
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

        <main class="container">
            <form action="" method="GET" class="d-flex align-items-center mb-4 my-5">
                <a href="..\proyecto\registro.html" class="btn btn-outline-dark btn-lg text-nowrap">Registrar usuario</a>
            </form>
            <table class="table align-middle table-hover text-center">
                <thead class="table-active">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                        while ($row=mysqli_fetch_array ($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_usuario']?></td>
                        <td><?php echo $row['nombres']?></td>
                        <td><?php echo $row['apellidos']?></td>
                        <td><?php echo $row['usuario']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['fecha_nac']?></td>
                        <td><a href="actualizar.php?id_usuario=<?php echo $row['id_usuario']?>" class="btn btn-info">Editar</a></td>
                        <td><a class="btn btn-danger" href="delete.php?id_usuario=<?php echo $row['id_usuario']?>" onclick="return confirm('¿Realmente desea eliminar?')">Eliminar</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
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