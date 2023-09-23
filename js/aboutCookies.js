var openModalButton = document.getElementById('openModal');
var closeModalButton = document.getElementById('closeModal');
var modal = document.getElementById('myModal');

// Ajoutez un gestionnaire d'événement pour ouvrir la fenêtre modale
openModalButton.addEventListener('click', function () {
    modal.style.display = 'block';
});

// Ajoutez un gestionnaire d'événement pour fermer la fenêtre modale
closeModalButton.addEventListener('click', function () {
    modal.style.display = 'none';
});

// Vous pouvez également fermer la fenêtre modale en cliquant à l'extérieur de celle-ci
window.addEventListener('click', function (event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});