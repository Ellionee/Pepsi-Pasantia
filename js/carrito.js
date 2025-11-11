document.addEventListener("DOMContentLoaded", () => {
  const productos = [
      {
        titulo: "Pepsi",
        precio: "$2000",
        calificacion: "5★",
        imagen: "css/images/pepsi.png",
        descripcion: "La clásica Pepsi que todos aman.",
        ingredientes: "Agua carbonatada, azúcar, cafeína."
      },
      {
        titulo: "Pepsi Zero Sugar",
        precio: "$1900",
        calificacion: "4.5★",
        imagen: "css/images/pepsi-zero-sugar.png",
        descripcion: "Menos calorías, mismo sabor.",
        ingredientes: "Cafeina, color caramelo, acido citrico"
      },
      {
        titulo: "Pepsi Diet",
        precio: "$2000",
        calificacion: "4.8★",
        imagen: "css/images/pepsi-diet.png",
        descripcion: "Sin azúcar y sin perder lo clasico",
        ingredientes: "Agua carbonatada, sin azúcar, cafeína."
      }
  ];

  const lista = document.getElementById("lista-productos");

  const detalleImg = document.getElementById("detalle-img");
  const detalleTitulo = document.getElementById("detalle-titulo");
  const detalleDescripcion = document.getElementById("detalle-descripcion");
  const detallePrecio = document.getElementById("detalle-precio");
  const detalleCalificacion = document.getElementById("detalle-calificacion");
  const detalleIngredientes = document.getElementById("detalle-ingredientes");

  productos.forEach(producto => {
    const card = document.createElement("div");
    card.classList.add("producto-carta");
    card.innerHTML = `
      <img src="${producto.imagen}" alt="${producto.titulo}">
      <div>
        <h4>${producto.titulo}</h4>
        <p>${producto.precio}</p>
      </div>
    `;

    card.addEventListener("click", () => {
      detalleImg.src = producto.imagen;
      detalleImg.alt = producto.titulo;
      detalleTitulo.textContent = producto.titulo;
      detalleDescripcion.textContent = producto.descripcion;
      detallePrecio.textContent = "Precio: " + producto.precio;
      detalleCalificacion.textContent = "Calificación: " + producto.calificacion;
      detalleIngredientes.textContent = "Ingredientes: " + producto.ingredientes;
    });

    lista.appendChild(card);
  });

  const searchInput = document.getElementById("search");

  searchInput.addEventListener("input", function () {
    const searchQuery = this.value.toLowerCase();
    const prdItems = document.querySelectorAll(".carrito-lista .producto-carta");

    prdItems.forEach(item => {
      const imgAltText = item.querySelector("img")?.alt.toLowerCase();

      if (imgAltText && imgAltText.includes(searchQuery)) {
        item.style.display = 'flex'; 
      } else {
        item.style.display = 'none';
      }
    });
  });
});

