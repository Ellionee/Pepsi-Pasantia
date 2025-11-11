let btn = document.getElementById("btn");
let perfilSection = document.getElementById("perfil-section");
let body = document.body;
let imgBtn = document.querySelector("#btn img");

btn.addEventListener("click", () => {

    let currentBgColor = window.getComputedStyle(perfilSection).backgroundColor;
    let currentBtnColor = window.getComputedStyle(btn).backgroundColor;
    let bodyBgColor = window.getComputedStyle(body).backgroundColor;
    let imgSrc = imgBtn.getAttribute("src");
    

        if (currentBgColor === "rgb(0, 0, 0)") {
            perfilSection.style.backgroundColor = "white";
            perfilSection.style.color = "black";
            perfilSection.style.transition = "all 0.5s ease";
            btn.style.backgroundColor = "black";
            btn.style.color = "white";
            btn.style.transition = "all 0.5s ease";
            body.style.backgroundColor = "black";
            body.style.transition = "all 0.5s ease";
            imgBtn.setAttribute("src", "css/images/iconos/icon-sol.png");
            imgBtn.style.transition = "all 0.5s ease";
        } else {
            perfilSection.style.backgroundColor = "black";
            perfilSection.style.color = "white";
            perfilSection.style.transition = "all 0.5s ease";
            btn.style.backgroundColor = "white";
            btn.style.color = "white";
            btn.style.transition = "all 0.5s ease";
            body.style.backgroundColor = "rgba(13, 13, 13, 1)";
            body.style.transition = "all 0.5s ease";
            imgBtn.setAttribute("src", "css/images/iconos/icon-luna.png");
            imgBtn.style.transition = "all 0.5s ease";
        }
});

