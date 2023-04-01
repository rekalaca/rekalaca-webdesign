// Fül kiválasztása
const floatingTab = document.querySelector(".floating-tab");

// Fül eltűntetése 10 másodperc múlva és halványulása
setTimeout(() => {
  let opacity = 1;
  const timer = setInterval(() => {
    if (opacity <= 0.1) {
      clearInterval(timer);
      floatingTab.style.display = "none";
    }
    floatingTab.style.opacity = opacity;
    opacity -= 0.1;
  }, 50);
}, 10000);
