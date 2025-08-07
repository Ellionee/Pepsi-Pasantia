let btn = document.getElementById("btn-form")
let a = "Enviado"


btn.addEventListener("click", () => {
    alert(a)
    const txtEmail = document.getElementById("name-form").value
    const txtClave = document.getElementById("password-form").value

    let json = {
    "usuarios": 
        {
        "mail":txtEmail,
        "password":txtClave
        }
    }

    console.log("Mail: " + json.usuarios.mail)
    console.log("Clave: " + json.usuarios.password)

    window.location.href = "index.php";
})

let txtBtnReg = document.getElementById("btn-register")

txtBtnReg.addEventListener("click", () => {
    window.location.href = "registro.php";
})