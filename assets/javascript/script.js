// navbar
const openNavbarIcon = document.getElementById("open-menu-icon");
const closeNavbarIcon = document.getElementById("close-menu-icon");
const navbarItems = document.getElementById("navbar-items");

openNavbarIcon.addEventListener("click", openMenu);
closeNavbarIcon.addEventListener("click", closeMenu);
navbarItems.addEventListener("click", closeMenu);

function openMenu() {
  navbarItems.style.transform = "translateX(0)";
}

function closeMenu() {
  navbarItems.style.transform = "translateX(100%)";
}
