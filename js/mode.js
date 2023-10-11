const toggleButton = document.getElementById("toggle-theme");
const body = document.body;
const buttonText = document.getElementById("button-text");

function toggleTheme() {
  if (body.classList.contains("dark-theme")) {
    body.classList.remove("dark-theme");
    localStorage.setItem("theme", "light");
    toggleButton.innerText = "Mode sombre";
  } else {
    body.classList.add("dark-theme");
    localStorage.setItem("theme", "dark");
    toggleButton.innerText = "Mode clair";
  }
}

toggleButton.addEventListener("click", toggleTheme);

// Fonction pour détecter et appliquer le thème en fonction des préférences de l'utilisateur
function detectTheme() {
  const prefersDarkMode = window.matchMedia("(prefers-color-scheme: light)").matches; // light = thème clair par défaut | dark = thème sombre par défaut
  const userTheme = localStorage.getItem("theme");

  if (userTheme === "dark" || (prefersDarkMode && userTheme !== "light")) {
    body.classList.add("dark-theme");
    toggleButton.innerText = "Mode clair";
  } else {
    body.classList.remove("dark-theme");
    toggleButton.innerText = "Mode sombre";
  }
}

detectTheme();
