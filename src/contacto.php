
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <script></script>
    <title>MorrocDelight</title>
  </head>
  <body class="flex flex-col min-h-screen">

  <header  class="h-32 bg-no-repeat flex justify-between items-center p-4 bg-orange-400 bg-cover bg-center">

<!-- Asegúrate de que la ruta de la imagen de fondo sea correcta -->

<div class="logo">
  <a href="index.php">
    <img src="../img/logo.png" alt="Logo" class="h-16 w-16 rounded-full object-cover" />
  </a>
</div>


<nav class="flex text-xl">
<!-- Navegación -->
  <a href="index.php" class="text-white hover:text-gray-900 mx-2">Inicio</a>
  <a href="servicios.html" class="text-white hover:text-gray-900 mx-2">Servicios</a>
  <a href="blog.php" class="text-white hover:text-gray-900 mx-2">Blog</a>
  <a href="contacto.php" class="text-white hover:text-gray-900 mx-2">Contacto</a>
</nav>
</header>

    <main id="" class="flex-grow">
      <form
        action="../base_de_datos/formulario.php"
        method="post"
        id="contact-form"
        name="contactForm"
        class="max-w-lg mx-auto bg-white p-8 mt-10 rounded shadow"
      >
        <h2 class="text-2xl font-semibold mb-4">Contacto</h2>
        <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2"
            >Nombre:</label
          >
          <input
            type="text"
            id="name"
            name="name"
            required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2"
            >Correo electrónico:</label
          >
          <input
            type="email"
            id="email"
            name="email"
            required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="mb-4">
          <label for="phone" class="block text-gray-700 text-sm font-bold mb-2"
            >Teléfono:</label
          >
          <input
            type="tel"
            id="phone"
            name="phone"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="mb-6">
          <label
            for="message"
            class="block text-gray-700 text-sm font-bold mb-2"
            >Mensaje:</label
          >
          <textarea
            id="message"
            name="message"
            required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
          ></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button
            type="submit"
            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          >
            Enviar
          </button>
        </div>
      </form>
    </main>

    <footer class="text-white text-center lg:text-left">
      <div class="text-center p-4 bg-orange-400 mt-4">
        © 2024 Derechos Reservados:
        <a class="text-white" href="https://tupagina.com/"
          >SaborGeoparqueMarruecos.com</a
        >
      </div>
    </footer>
    <script src="../javascript/welcome.js"></script>
    <script src="../javascript/dynamicContent.js"></script>
    <script src="../javascript/contactForm.js"></script>
    <script src="../javascript/imageGallery.js"></script>
  </body>
</html>
