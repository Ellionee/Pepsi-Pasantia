let txtButton = document.getElementById("btn")
let txtName = document.getElementById("name-form")
let txtAdress = document.getElementById("adress-form")
let txtEmail = document.getElementById("email-form")
let txtTel = document.getElementById("tel-form")
let txtDni = document.getElementById("dni-form")
let txtSede = document.getElementById("sede-form")
let txtComentario = document.getElementById("info-form")
let a = "Enviado"



txtButton.addEventListener("click", () => {
    alert(a)

    const nombre = txtName.value
    const apellido = txtAdress.value
    console.log("Nombre: " + nombre + "|" + "Apellido: " + apellido)

    const email = txtEmail.value
    const tel = txtTel.value
    console.log("Email: " + email + "|" + "Telefono: " + tel)

    const dni = txtDni.value
    console.log("DNI: " + dni)

    const sede = txtSede.value
    console.log("Sede: " + sede)

    const comentario = txtComentario.value
    console.log("Comentario: " + comentario)

})

