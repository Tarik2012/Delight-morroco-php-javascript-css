<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <title>MorrocDelight</title>
</head>
<body class="flex flex-col min-h-screen">
<!-- style="height: 12rem; background-image: url('../img/img1.png');" -->
<header   class="h-32 bg-no-repeat flex justify-between items-center p-4 bg-orange-400 bg-cover bg-center">
 
        <!-- Asegúrate de que la ruta de la imagen de fondo sea correcta -->
        <div class="logo">
    <a href="index.php">
        <img src="../img/logo.png" alt="Logo" class="h-16 w-16 rounded-full object-cover" />
    </a>
</div>


        
        <nav class="flex text-xl">
            <!-- Navegación -->
            <a href="index.php" class="text-white hover:text-gray-900 mx-2">Inicio</a>
            <a href="servicios.php" class="text-white hover:text-gray-900 mx-2">Servicios</a>
            <a href="blog.php" class="text-white hover:text-gray-900 mx-2">Blog de cocina marroquí</a>
            <a href="contacto.php" class="text-white hover:text-gray-900 mx-2">Contacto</a>
        </nav>
</header>

<main class="flex-grow">
    <!-- Contenido Principal -->
    <div>Hola desde servicios</div>
</main>


<footer class="text-white text-center lg:text-left">
    <div class="text-center p-4 bg-orange-400 mt-4">
        © 2024 Derechos Reservados:
        <a class="text-white" href="https://tupagina.com/">SaborGeoparqueMarruecos.com</a>
    </div>
</footer>
    <script src="../javascript/welcome.js"></script>
    <script src="../javascript/dynamicContent.js"></script>
    <script src="../javascript/contactForm.js"></script>
    <script src="../javascript/imageGallery.js"></script>
</body>
</html>
