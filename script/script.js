const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach((n) =>
  n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  })
);

const activePage = window.location.pathname;
const navLinks = document.querySelectorAll(".nav-item a");
navLinks.forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add("active");
  }
});

function portifolio() {
  window.location.href = "/portifolio";
}
function contact() {
  window.location.href = "/contact";
}
function project() {
  window.location.href = "/project";
}

// GSAP

gsap.from(".container1", { opacity: 0, y: 100, duration: 1 });
//animate ".box" from an opacity of 0 to an opacity of 0.5
gsap.fromTo(".left", { opacity: 0 }, { opacity: 0.5, duration: 1 });

document
  .getElementById("subscription-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting

    const emailInput = document.getElementById("email");
    const email = emailInput.value;
    const notification = document.getElementById("notification");

    // Simple email validation regex
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailPattern.test(email)) {
      notification.textContent = "Subscribed successfully!";
      notification.className = "notification success";
      notification.style.display = "block";
    } else {
      notification.textContent = "Invalid email address. Please try again.";
      notification.className = "notification error";
      notification.style.display = "block";
    }
  });
