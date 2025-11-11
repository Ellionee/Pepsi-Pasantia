document.getElementById("search").addEventListener("input", function() {
    const searchQuery = this.value.toLowerCase();
    const faqItems = document.querySelectorAll(".faq__div li");
    
    faqItems.forEach(item => {
        const linkText = item.querySelector("a").textContent.toLowerCase();
        
        if (linkText.includes(searchQuery)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});
