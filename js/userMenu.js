document.addEventListener("DOMContentLoaded", function() {
    var dropdown = document.querySelector(".userMenu");
    var dropdownContent = document.querySelector(".userMenu-content");

    dropdown.addEventListener("click", function() {
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    });

    window.addEventListener("click", function(event) {
        if (!dropdown.contains(event.target)) {
            dropdownContent.style.display = "none";
        }
    });
});