document.addEventListener("DOMContentLoaded", () => {
    const mainBtn = document.getElementById("btn-main");
    const mainItems = document.querySelector("nav");
    const btnClose = document.getElementById("btn-close");

    mainBtn.addEventListener("click", () => {

        if (mainItems.style.display === "none" || mainItems.style.display === "") {
            mainItems.style.display = "block";
        } else {
            mainItems.style.display = "none";
        }
    });

    btnClose.addEventListener("click", () => {
        mainItems.style.display = "none";
    })
});
