document.addEventListener("DOMContentLoaded", () => {
    const productos = [
        {
            img: "css/images/pepsi.png",
            alt: "pepsi",
            link: "producto1.html"
        },
        {
            img: "css/images/pepsi-max.png",
            alt: "pepsi max",
            link: "producto2.html"
        }
    ];

    const container = document.querySelector('.containerprd');

    productos.forEach(producto => {
        const card = document.createElement("div");
        card.classList.add("producto-carta");
        card.innerHTML = `
            <a href="${producto.link}" target="_blank">
                <div class="columnprd">
                    <img class="product-img" src="${producto.img}" alt="${producto.alt}">
                </div>
            </a>
        `;
        container.appendChild(card);
    });
});
