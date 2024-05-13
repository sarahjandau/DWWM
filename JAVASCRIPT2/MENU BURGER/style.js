

function toggleMenu() {
    const burgerButton = document.getElementById("menuburger");
  if (menu.style.display === "none" || menu.style.display === "") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

burger.addEventListener("click", toggleMenu);