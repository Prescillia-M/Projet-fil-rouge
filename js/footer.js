document.addEventListener("DOMContentLoaded", function() {
    const footer = document.querySelector("footer");

    function updateFooterPosition() {
        const scrollY = window.scrollY || window.pageYOffset;
        const windowHeight = window.innerHeight;
        const bodyHeight = document.body.clientHeight;

        if (scrollY + windowHeight >= bodyHeight) {
            footer.style.bottom = "0";
        } else {
            footer.style.bottom = "-50px";
        }
    }

    window.addEventListener("scroll", updateFooterPosition);
    window.addEventListener("resize", updateFooterPosition);

    // Appelez la fonction pour configurer la position initiale du footer
    updateFooterPosition();
});
