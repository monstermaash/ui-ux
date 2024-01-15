console.log('choose-program.js loaded');

document.addEventListener("DOMContentLoaded", function () {
  const inputForm = document.getElementById("input-form");
  const confirmationContainer = document.querySelector(".registration-confirmation");
  const loadingScreen = document.querySelector(".choose-program-loading-screen");

  inputForm.addEventListener("submit", function (event) {
    event.preventDefault();

    // Hide the form content
    inputForm.style.opacity = "0";

    // Display the registration confirmation
    confirmationContainer.style.display = "block";
    confirmationContainer.classList.add("show"); // Add the 'show' class

    // Display the loading screen
    loadingScreen.style.display = "block";
    loadingScreen.classList.add("show"); // Add the 'show' class

    console.log("Icon visibility:", window.getComputedStyle(confirmationContainer).getPropertyValue("opacity"));
    console.log("Icon bottom position:", window.getComputedStyle(confirmationContainer).getPropertyValue("bottom"));

    // Simulate a delay before redirecting (adjust the duration as needed)
    setTimeout(function () {
      window.location.href = "index.php";
    }, 2000); // Adjust the duration to match your animation duration
  });
});


