document.getElementById("search").addEventListener("input", function() {
    const searchQuery = this.value.toLowerCase();
    const prdItems = document.querySelectorAll(".containerprd a");

    prdItems.forEach(item => {
        const imgAltText = item.querySelector("img")?.alt.toLowerCase();

        if (imgAltText && imgAltText.includes(searchQuery)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});
