const toggleButton = document.getElementById('toggle-theme');
const body = document.body;

// Fonction pour basculer entre les thèmes
function toggleTheme() {
    if (body.classList.contains('dark-theme')) {
        body.classList.remove('dark-theme');
        localStorage.setItem('theme', 'light'); // Stocker le choix de l'utilisateur dans localStorage
    } else {
        body.classList.add('dark-theme');
        localStorage.setItem('theme', 'dark'); // Stocker le choix de l'utilisateur dans localStorage
    }
}

// Écouteur d'événement pour le bouton de bascule
toggleButton.addEventListener('click', toggleTheme);

// Fonction pour détecter et appliquer le thème en fonction des préférences de l'utilisateur
function detectTheme() {
    const prefersDarkMode = window.matchMedia("(prefers-color-scheme: light)").matches;
    
    // Obtenir le choix de l'utilisateur depuis localStorage
    const userTheme = localStorage.getItem('theme');

    // Si l'utilisateur a choisi un thème, utilisez-le, sinon suivez les préférences du système
    if (userTheme === 'dark' || (prefersDarkMode && userTheme !== 'light')) {
        body.classList.add('dark-theme');
    } else {
        body.classList.remove('dark-theme');
    }
}

// Appeler la fonction de détection du thème au chargement de la page
detectTheme();