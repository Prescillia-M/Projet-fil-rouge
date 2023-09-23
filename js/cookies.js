document.addEventListener("DOMContentLoaded", () => {
  const cookieBox = document.getElementById("cookie-consent-box");
  const acceptButton = document.getElementById("accept-cookies");
  const refuseButton = document.getElementById("refuse-cookies");

  acceptButton.addEventListener("click", () => {
    // Code pour accepter les cookies (ajoute ici le code nécessaire)
    cookieBox.style.display = "none"; // Cacher la boîte de consentement
  });

  refuseButton.addEventListener("click", () => {
    // Code pour refuser les cookies (ajoute ici le code nécessaire)
    cookieBox.style.display = "none"; // Cacher la boîte de consentement
  });

  // Afficher la boîte de consentement aux cookies au chargement de la page
  cookieBox.style.display = "block";
});
