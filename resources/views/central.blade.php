<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central - Mi Aplicación</title>
    <style>
        
body {
  /* background-image: url('../Imagenes/Low\ Poly.png'); */
  margin: 0; /* Asegurar que no haya espacios en blanco */
  padding: 0; /* Asegurar que no haya espacios en blanco */
}

/* Estilos de la cabecera */
.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background-color: #ffffff;
}

/* Logo de la cabecera */
.header-logo {
  width: 120px;
  margin-left: 20px; /* Ajustar el margen izquierdo */
}




/* Contenedor de interacciones */
.interactions-container {
  display: grid;
  grid-template-columns: 1fr; /* Cambia a una sola columna en pantallas pequeñas */
  gap: 20px; /* Reducir el espacio entre las tarjetas */
  max-width: 1000px;
  margin: 0 auto;
  padding: 20px;
}

/* Sección de interacción */
.interaction-section {
  padding: 20px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Contenedor de calificación */
.rating-container {
  display: flex;
  justify-content: center;
  margin-top: 10px;
  overflow-x: auto; /* Habilitar el desplazamiento horizontal si los botones exceden el ancho del contenedor */
  overflow-y: hidden; /* Ocultar el desplazamiento vertical */
  white-space: nowrap; /* Evitar que los elementos se envuelvan en múltiples líneas */
}

/* Botón de calificación */
.rating-button {
  font-size: 1rem;
  background-color: #fff;
  cursor: pointer;
  margin: 10px; /* Espacio entre los botones */
  border: none;
  outline: none;
  width: 120px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Efecto hover para el botón de calificación */
.rating-button:hover {
  background-color: transparent;
  transform: scale(1.05);
}

/* Imagen dentro del botón de calificación */
.rating-button img {
  width: 80px;
  height: auto;
}

/* Texto dentro del botón de calificación */
.rating-button p {
  margin-top: 5px;
}

.card {
  border-radius: 10px;
  width: 110%; /* Ancho del 95% del contenedor padre */
  max-width: 600px; /* Ancho máximo */
  margin-top: -0px;
  margin-left: 30px;
}
/* Título de la tarjeta */
.card h2 {
  font-size: 1rem;
  margin-bottom: 15px;
  background-color: #0a581b;
  color: #ffffff;
  padding: 10px;
  border-radius: 5px;
  text-align: center;
  margin-top: 0;
}

/* Párrafo de la tarjeta */
.card p {
  font-size: 1rem;
  margin-bottom: 15px;
  font-family: cursive;
}

/* Carrusel */
.carousel {
  display: flex;
  justify-content: center;
  overflow: hidden;
}
.carousel img {
        width: 260px;
        display: block; /* Evita espacios en blanco debajo de las imágenes */
        margin: 0 auto; /* Centra horizontalmente las imágenes */
        height: 350px; /* Ajusta la altura de las imágenes */
      
    }

    /* Estilo para el contenedor del carrusel */
    .carousel-container {
        max-width: 600px; /* Establece un ancho máximo para el contenedor */
        overflow: hidden; /* Oculta el desplazamiento horizontal */
        margin: 0 auto; /* Centra el contenedor horizontalmente */
      
    }   


/* Botón de alerta */
div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
  border: 0;
  border-radius: 0.25em;
  background: initial;
  background-color: green;
  color: #fff;
  font-size: 1em;
}

/* Tarjeta 1 */
.card1 {
  background-color: #ffffff;
  border-radius: 10px;
  
}

.card1 h2 {
  font-size: 1rem;
  margin-bottom: 15px;
  background-color: #0a581b;
  color: #ffffff;
  padding: 10px;
  border-radius: 5px;
  text-align: center;
  margin-top: -20px;
}

.card1 p {
  font-size: 1rem;
  margin-bottom: 15px;
  font-family: cursive;
}

/* Media query para pantallas más grandes */
@media screen and (min-width: 768px) {
  .interactions-container {
    grid-template-columns: repeat(2, 2fr); /* Cambia a dos columnas en pantallas más grandes */
    gap: 40px; /* Aumenta el espacio entre las tarjetas */
  }

  .header-logo {
    margin-left: 30px; /* Ajustar el margen izquierdo */
  }
}
@media screen and (min-width: 688px) {
 
  .card{
    margin-left: 35px;
  }
  

}

/* Media query para pantallas más pequeñas */
@media screen and (max-width: 768px) {
  /* Cambiar la dirección de flexión a columna */
  .rating-container {
    flex-direction: column;
    align-items: center; /* Centrar los elementos */
  }
}

/* Media query para ajustar el tamaño en pantallas más pequeñas */
@media screen and (max-width: 768px) {
  .card1{
   margin-left: 109px;
  }
  .card {
    width: 90%; /* Reducir el ancho en pantallas más pequeñas */
  }

  .card img {
    width: 100%; /* Ajustar el ancho de la imagen al 100% del contenedor */
    height: auto; /* Mantener la relación de aspecto */
  }
}


/* Media query para pantallas entre 768px y 1000px */
@media screen and (min-width: 768px) and (max-width: 1000px) {
  .header {
    padding: 20px 30px; /* Ajustar el padding del encabezado */
  }

  .header-logo {
    width: 120px; /* Mantener el tamaño del logo */
    margin-left: 20px; /* Ajustar el margen izquierdo */
  }

  .interactions-container {
    grid-template-columns: repeat(1, 2fr); /* Cambiar a dos columnas */
    gap: 20px; /* Ajustar el espacio entre las tarjetas */
  }
  .card{
    margin-left: 70px;
  }
}

    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    
    </script>


</head>
<body>
    <div class='Encabezado'>
        <header class="header">
          <img class='header-logo' src="https://media.discordapp.net/attachments/1101500368397029496/1231006226280878081/Imagen_de_WhatsApp_2024-04-19_a_las_16.29.08_28e1b83e.jpg?ex=663562e3&is=6622ede3&hm=1ea062dfa7e82a64c2f16fa35fd2349ffb77689d924926f998a62dbfb8cfb8b3&=&format=webp&width=1012&height=345" alt="" />
        </header>
      </div>    
    <div class="interactions-container">
        <div class="interaction-section">
            <div class="card1">
              <h2>Califica tu experiencia en La Gran Colombia</h2>
              <p>Por favor, selecciona una de las siguientes caras para calificar tu experiencia.</p>
              <p>¿Cómo te sientes con respecto a tu experiencia? Tu opinión es muy importante para nosotros y nos ayuda a mejorar nuestros servicios. Utiliza las caras a continuación para expresar tu satisfacción:</p>
                <form id="ratingForm" action="/ratings" method="POST">
                  @csrf <!-- Agrega el token CSRF para protección contra CSRF -->
              
                  <div class="rating-container">
                      <button class="rating-button" type="button" onclick="handleInteractionClick('muy_bueno')" title="Muy Bueno">
                          <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054596882504/muy_bueno.png?ex=6637f14b&is=66369fcb&hm=2d384d702f825bc4d87d76c7b18228bf384d2790e816b3506340bf4924046dc7&=&format=webp&quality=lossless&width=548&height=549" alt="" /><p>Muy bueno</p>
                      </button>
                      <button class="rating-button" type="button" onclick="handleInteractionClick('bueno')" title="Bueno">
                          <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054018195476/bueno.png?ex=6637f14b&is=66369fcb&hm=73038047c47a7e826238f514ab9e01656c2eef46488d27a85d49cfb4b391cf68&=&format=webp&quality=lossless&width=549&height=549" alt="" /> <p>Bueno</p>
                      </button>
                      <button class="rating-button" type="button" onclick="handleInteractionClick('neutral')" title="Neutral">
                          <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054840410154/neutral.png?ex=6637f14b&is=66369fcb&hm=8ff5b05b6bf161711771fa037f1b9df350e4277c9076ce7615c06d8b31a0f552&=&format=webp&quality=lossless&width=549&height=549" alt="" /> <p>Neutral</p>
                      </button>
                      <button class="rating-button" type="button" onclick="handleInteractionClick('malo')" title="Malo">
                          <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054269722735/malo.png?ex=6637f14b&is=66369fcb&hm=0c58e47fb43797fe6ab505e9ab4653daad355add757565132858d52581d9c277&=&format=webp&quality=lossless&width=549&height=549" alt="" /><p class='malo'>Malo</p>
                      </button>
                      <button class="rating-button" type="button" onclick="handleInteractionClick('muy_malo')" title="Muy Malo">
                          <img src="https://media.discordapp.net/attachments/1101500368397029496/1232794694136758362/MUYPUTO.png?ex=6637f007&is=66369e87&hm=00257b218424873c6a4a90788abdd242b72569799425c52bc80adb6a83d87383&=&format=webp&quality=lossless&width=549&height=549" alt="" /> <p class='muymalo'>Muy Malo</p>
                      </button>
                      <!-- Agrega aquí los otros botones de calificación -->
                  </div>
              </form>
              
            </div>
        </div>
        <div class="card">
            <div class='carousel'>
              <img src="{{ asset('path_to_your_image/image1.jpg') }}" alt="Imagen 1" />
            </div>
          </div>
      
    </div>
    

<!-- Agrega jQuery antes de tu script personalizado -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

var csrfToken = "{{ csrf_token() }}";

function handleInteractionClick(rating) {
    // Mapear las cadenas de texto a valores numéricos
    switch(rating) {
        case 'muy_bueno':
            rating = 5;
            break;
        case 'bueno':
            rating = 4;
            break;
        case 'neutral':
            rating = 3;
            break;
        case 'malo':
            rating = 2;
            break;
        case 'muy_malo':
            rating = 1;
            break;
        default:
            rating = 0; // Valor por defecto o manejar el caso en que el rating no sea válido
            break;
    }

    // Verificar el valor de rating en la consola
    console.log('Valor de rating:', rating);

    // Verificar el token CSRF en la consola
    console.log('Token CSRF:', csrfToken);

    // Realizar la petición AJAX para guardar la calificación
    $.ajax({
        url: '/ratings',
        type: 'POST',
        data: {
            _token: csrfToken, // Agrega el token CSRF
            rating: rating, 
            user_id: 1
        },
        dataType: 'json',
        success: function(response) {
            // Manejar la respuesta del servidor
            if (response.success) {
                // Mostrar mensaje de éxito usando SweetAlert2
                Swal.fire({
                    title: '¡Calificación Guardada!',
                    text: `Has calificado como ${rating}`,
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                    timer: 3000,
                    timerProgressBar: true
                });
            } else {
                // Mostrar mensaje de error si la calificación no se guardó
                Swal.fire({
                    title: 'Error',
                    text: 'No se pudo guardar la calificación. Inténtalo de nuevo.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            }
        },
        error: function(xhr, status, error) {
            // Manejar errores de la petición AJAX
            console.error('Error en la solicitud AJAX:', error);
            Swal.fire({
                title: 'Error',
                text: 'Ha ocurrido un error al procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    });
}



</script>


    <script>



        const images = [
    'https://media.discordapp.net/attachments/1101500368397029496/1235992136982335608/IMG-20240417-WA0001.jpg?ex=6637b461&is=663662e1&hm=116b39f7a5a36a09a9e256358596063ad0a3f0f96aecea2c5c30e174748cea7c&=&format=webp&width=549&height=549',
    'https://media.discordapp.net/attachments/1101500368397029496/1235992098134687764/IMG-20240417-WA0007.jpg?ex=6637b457&is=663662d7&hm=abd1022d656fa9abc55d2fd6120968e5f0797f6a118f18bfebb127542b4f2dcd&=&format=webp&width=549&height=549',
    // Agrega más URLs de imagen si es necesario
];


        let currentImageIndex = 0;

        function startCarousel() {
            setInterval(() => {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                const carouselImage = document.querySelector('.carousel img');
                carouselImage.src = images[currentImageIndex];
            }, 6000); // Cambia la imagen cada 6 segundos (6000 milisegundos)
        }

        // Inicia el carrusel cuando se cargue completamente la página
        window.addEventListener('load', startCarousel);
    </script>
</body>

</html>
