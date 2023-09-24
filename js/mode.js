const toggleButton = document.getElementById("toggle-theme");
const body = document.body;
const buttonText = document.getElementById("button-text"); // Ajouter un élément pour le texte du bouton

// Fonction pour basculer entre les thèmes
function toggleTheme() {
  if (body.classList.contains("dark-theme")) {
    body.classList.remove("dark-theme");
    localStorage.setItem("theme", "light");
    toggleButton.innerText = "Mode sombre"; // Mettre à jour le texte du bouton en fonction du thème
  } else {
    body.classList.add("dark-theme");
    localStorage.setItem("theme", "dark");
    toggleButton.innerText = "Mode clair"; // Mettre à jour le texte du bouton en fonction du thème
  }
}

// Écouteur d'événement pour le bouton de bascule
toggleButton.addEventListener("click", toggleTheme);

// Fonction pour détecter et appliquer le thème en fonction des préférences de l'utilisateur
function detectTheme() {
  const prefersDarkMode = window.matchMedia(
    "(prefers-color-scheme: light)"
  ).matches; // light = thème clair par défaut | dark = thème sombre par défaut
  const userTheme = localStorage.getItem("theme");

  if (userTheme === "dark" || (prefersDarkMode && userTheme !== "light")) {
    body.classList.add("dark-theme");
    toggleButton.innerText = "Mode clair"; // Mettre à jour le texte du bouton en fonction du thème
  } else {
    body.classList.remove("dark-theme");
    toggleButton.innerText = "Mode sombre"; // Mettre à jour le texte du bouton en fonction du thème
  }
}

// Appeler la fonction de détection du thème au chargement de la page
detectTheme();
