// comprar y carrito
/*var listaproductos = [];
var total = 0;

function comprar() {
	var producto = document.getElementById('nombre').textContent; 
	var precioTexto = document.getElementById('precio').textContent; 
	console.log("prueba")
	var precio = parseInt(precioTexto.replace('$', '').replace(',', ''), 10); 
	
	if (!isNaN(precio)) {
	  añadir(producto, precio);
	} else {
	  console.log('No se pudo convertir el precio a un número válido.');
	}
}

function añadir() {
  var nombre = document.getElementById('nombre').textContent; 
  var precioTexto = document.getElementById('precio').textContent; 
  var juegoimg = document.getElementById

  var precio = parseInt(precioTexto.replace('$', '').replace(',', ''), 10); 
  
  if (!isNaN(precio)) {
      let totalElement = $("#total");
      let carritoElement = $("#carrito");
      let juegoimg = document.getElementById('carrusel'); //despues lo hacemos conlos demas juegos
      let juegoClonado = juegoimg.cloneNode(true);
      let imgcarrito = $("imgcarrito");

      let juegocarrito = $("#juegocarrito");
  
      listaproductos = listaproductos || [];
      listaproductos.push({ nombre: nombre, precio: precio });

      total = total + precio;
      totalElement.text(`Total a pagar $${total}`);
      carritoElement.css('visibility', 'visible');

      imgcarrito.append(juegoClonado);


      var listaProductosTexto = listaproductos.map(function (producto) {
        return `${producto.nombre}: $${producto.precio}`;
    });
    var listaProductosConSaltos = listaProductosTexto.join('<br>');

    // Actualiza el contenido de juegocarrito con saltos de línea
    juegocarrito.html(listaProductosConSaltos);

  } else {
      console.log('No se pudo convertir el precio a un número válido.');
  }
}

function mostrarCarrito() {
	if (listaproductos.length > 0) {
		var listaProductosTexto = listaproductos.map(function (item) {
			return `${item.nombre}: $${item.precio}`;
		});

		window.alert(`Productos:\n${listaProductosTexto.join("\n")}\nTotal: $${total}`);
	} else {
		window.alert("No hay productos en la lista.");
	}
}
function cancelarCompra() {
  listaproductos = []; 
  total = 0;
  $("#total").text("Total a pagar $0"); 
  $("#juegocarrito").empty(); 
  $("#carrito").css("visibility", "hidden"); 
}*/


var listaproductos = [];
var total = 0;

function comprar() {
  var nombre = document.getElementById('nombre').textContent;
  var precioTexto = document.getElementById('precio').textContent;
  var precio = parseInt(precioTexto.replace('$', '').replace(',', ''), 10);

  if (!isNaN(precio)) {
    añadir(nombre, precio);
  } else {
    console.log('No se pudo convertir el precio a un número válido.');
  }
}

function añadir(nombre, precio) {
  var totalElement = $("#total");
  var carritoElement = $("#carrito");
  var juegoimg = document.getElementById('carrusel');
  var imgcarrito = $("#imgcarrito");
  var juegocarrito = $("#juegocarrito");

  listaproductos = listaproductos || [];
  listaproductos.push({ nombre: nombre, precio: precio });

  total += precio;
  totalElement.text(`Total a pagar $${total}`);
  carritoElement.css('visibility', 'visible');

  // Clona la imagen del juego y agrega al carrito
  var juegoClonado = juegoimg.cloneNode(true);
  imgcarrito.append(juegoClonado);

  var listaProductosTexto = listaproductos.map(function (producto) {
    return `${producto.nombre}: $${producto.precio}`;
  });

  // Actualiza el contenido de juegocarrito con saltos de línea
  juegocarrito.html(listaProductosTexto.join('<br>'));
}

function mostrarCarrito() {
  if (listaproductos.length > 0) {
    var listaProductosTexto = listaproductos.map(function (item) {
      return `${item.nombre}: $${item.precio}`;
    });

    window.alert(`Productos:\n${listaProductosTexto.join("\n")}\nTotal: $${total}`);
  } else {
    window.alert("No hay productos en la lista.");
  }
}

function cancelarCompra() {
  listaproductos = [];
  total = 0;
  $("#total").text("Total a pagar $0");
  $("#juegocarrito").empty();
  $("#carrito").css("visibility", "hidden");
}



// fin de comprar y carrito
