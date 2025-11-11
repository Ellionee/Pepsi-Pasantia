function irAbajo(event) {
  event.preventDefault();
  const seccionDestino = document.getElementById("seccion-destino");
  seccionDestino.scrollIntoView({
        behavior: "smooth"
  });
}