<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central - Mi Aplicación</title>
    <style>
        
body {
  background-image: url('../Imagenes/Low\ Poly.png');
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
                <div class="rating-container">
                    <button class="rating-button" onclick="handleInteractionClick('muy_bueno')" title="Muy Bueno">
                        <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054596882504/muy_bueno.png?ex=66369fcb&is=66354e4b&hm=2a5d6dd4c7cea2f9b767201ad24313a21044f3e1d495e564a48603362215dc98&=&format=webp&quality=lossless&width=548&height=549" alt="" /><p>Muy bueno</p>
                    </button>
                    <button class="rating-button" onclick="handleInteractionClick('bueno')" title="Bueno">
                        <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054018195476/bueno.png?ex=66369fcb&is=66354e4b&hm=932f7f80de051412a11104403cbe650569eea0e315b7e3c959e974be327d35ee&=&format=webp&quality=lossless&width=549&height=549" alt="" /> <p>Bueno</p>
                    </button>
                    <button class="rating-button" onclick="handleInteractionClick('neutral')" title="Neutral">
                        <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054840410154/neutral.png?ex=66369fcb&is=66354e4b&hm=494ed50cbc7cdb2f90409f02cffc4730daeb8d1f359e4ca5c95e74af8ef3eae6&=&format=webp&quality=lossless&width=549&height=549" alt="" /> <p>Neutral</p>
                    </button>
                    <button class="rating-button" onclick="handleInteractionClick('malo')" title="Malo">
                        <img src="https://media.discordapp.net/attachments/1101500368397029496/1232796054269722735/malo.png?ex=66369fcb&is=66354e4b&hm=6d8b5975d2b9eeda38cfc7843c4de08e495825984c05376517ccd8860ee737a3&=&format=webp&quality=lossless&width=549&height=549" alt="" /><p class='malo'>Malo</p>
                    </button>
                    <button class="rating-button" onclick="handleInteractionClick('muy_malo')" title="Muy Malo">
                        <img src="https://media.discordapp.net/attachments/1101500368397029496/1232794694136758362/MUYPUTO.png?ex=66369e87&is=66354d07&hm=2e871cf3bd499054264ee80dc6d35418ffeafd50edd63315d6af5d50f0ae38ae&=&format=webp&quality=lossless&width=549&height=549" alt="" /> <p class='muymalo'>Muy Malo</p>
                    </button>
                    <!-- Agrega aquí los otros botones de calificación -->
                </div>
                
            </div>
        </div>
        <div class="card">
            <div class='carousel'>
              <img src="{{ asset('path_to_your_image/image1.jpg') }}" alt="Imagen 1" />
            </div>
          </div>
      
    </div>
    
    <!-- Script de JavaScript -->
    <script>
        function handleInteractionClick(rating) {
            // Puedes realizar aquí cualquier lógica adicional antes de guardar la calificación

            // Ejemplo: enviar la calificación a través de una petición AJAX
            // Simulación de petición AJAX
            setTimeout(() => {
                // Mostrar la ventana de SweetAlert al completar la petición
                Swal.fire({
                    title: '¡Calificación Guardada!',
                    text: `Has calificado como ${rating}`,
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            }, 1000); // Simulación de tiempo de respuesta de 1 segundo
        }

        const images = [
    'https://media.discordapp.net/attachments/1101500368397029496/1235992136982335608/IMG-20240417-WA0001.jpg?ex=663662e1&is=66351161&hm=f4861b46858eb6f6cc5f5a3cf9b488cd94c7a53eec6d60c7328b5a91f5b680f8&=&format=webp&width=549&height=549',
    'https://media.discordapp.net/attachments/1101500368397029496/1235992098134687764/IMG-20240417-WA0007.jpg?ex=663662d7&is=66351157&hm=70a6af652b1fa2a07282b1f88d2ad676d1ff3140e99bd184d5768a5b65529eb7&=&format=webp&width=549&height=549',
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