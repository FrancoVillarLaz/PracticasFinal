// Función para enviar un mensaje al foro
function enviarMensaje() {
    const usuario = document.getElementById('usuario').value;
    const mensaje = document.getElementById('mensaje').value;
  
    // Aquí podrías enviar el mensaje a tu servidor usando WebSockets o enviarlo a una base de datos en tiempo real (Firebase, por ejemplo)
    // Luego, podrías actualizar el foro con los mensajes nuevos.
    
    mostrarMensaje(usuario, mensaje); // Esto es solo para demostración en el navegador
  }
  
  // Función para mostrar un mensaje en el foro
  function mostrarMensaje(usuario, mensaje) {
    const mensajesDiv = document.getElementById('mensajes');
    const nuevoMensaje = document.createElement('div');
    nuevoMensaje.innerHTML = `<strong>${usuario}:</strong> ${mensaje}`;
    mensajesDiv.appendChild(nuevoMensaje);
  }
  