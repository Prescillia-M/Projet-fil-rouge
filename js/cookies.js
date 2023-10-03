document.addEventListener("DOMContentLoaded", () => {
  const cookieBox = document.getElementById("cookie-consent-box");
  const acceptButton = document.getElementById("accept-cookies");
  const refuseButton = document.getElementById("refuse-cookies");

  acceptButton.addEventListener("click", () => {
    cookieBox.style.display = "none";
  });

  refuseButton.addEventListener("click", () => {
    cookieBox.style.display = "none";
  });

  cookieBox.style.display = "block";
});
