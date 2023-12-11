
let images = [
    "localhost/public/view/img/carrusel/brujo.jpg",
    "localhost/public/view/img/carrusel/cyberpunk4k.jpg",
    "localhost/public/view/img/carrusel/dias.jpg",
    "localhost/public/view/img/carrusel/kratos4k.jpg"
  ];
  
  let juegos = [
    "The Witcher",
    "Cyberpunk",
    "Days Gone",
    "God Of Wars"
  ];
  
  let sinopsis = [
    "Eres Geralt de Rivia, cazador de monstruos. En un continente devastado por la guerra e infestado de criaturas, tu misión es encontrar a Ciri, la niña de la profecía, un arma viviente que puede alterar el mundo tal y como lo conocemos.",
    "Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en el futuro sombrío de Night City, una peligrosa megalópolis obsesionada con el poder, el glamur y las incesantes modificaciones corporales.",
    "Lucha y recorre un Estados Unidos pospandémico letal. Ponte en la piel de Deacon St. John, un errante cazarrecompensas que recorre la carretera rota luchando por su supervivencia mientras busca una razón para seguir viviendo en este juego de acción y aventura de mundo abierto.",
    "Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también."
  ];
  
  let num = 0;
  
  function cambiarImagenYTexto() {
    let carrusel = $("#carrusel");
    let nombre = $("#nombre");
    let sinop = $("#sinopsis");
    let inf = $("#info")
    // Aplicar transición al cambio de imagen
    carrusel.css('transform', 'translateX(-5%)');
    sinop.css('transform', 'translateX(-5%)');

    setTimeout(() => {
      carrusel.attr("src",images[num]);
      console.log("Ruta de la imagen:", images[num]);

      carrusel.css('transform', 'translateX(0)');
      sinop.css('transform', 'translateX(0)');

    }, 500); // 500ms para coincidir con la duración de la transición
    // Cambiar el texto
    nombre.text(juegos[num]);
    sinop.text(sinopsis[num]);
  }
  
  function siguiente() {
    num++;
    if (num >= images.length) {
      num = 0;
    }
    cambiarImagenYTexto();

  }
  
  function anterior() {
    num--;
    if (num < 0) {
      num = images.length - 1;
    }
    cambiarImagenYTexto();
  }
  
  
function mostrar() {
    $('#info').css('opacity', '1');
    $('#carrusel').css('filter', 'contrast(120%)');
    $('#info').css('filter', 'contrast(120%)');

  }
  
  function ocultar() {
    $('#info').css('opacity', '0');
    $('#info').css('filter', 'contrast(100%)');
    $('#carrusel').css('filter', 'contrast(100%)');


  }
  
  
  
  
  
  
  