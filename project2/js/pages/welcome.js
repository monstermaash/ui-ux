console.log('welcome.js loaded');

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const loadingScreen = document.querySelector(".welcome-loading-screen");
    const logoLoading = document.querySelector(".logo-loading");

    logoLoading.style.transform = "translateY(-500%)";

    setTimeout(function () {
      loadingScreen.style.height = "0";
      loadingScreen.style.overflow = "hidden";
      logoLoading.style.transform = "translateY(50%)";
      loadingScreen.addEventListener("transitionend", function () {
        loadingScreen.remove();

        const content = document.querySelector(".content");
        content.style.display = "block";
      });
    }, 1500); 
  }, 1000); 
});
