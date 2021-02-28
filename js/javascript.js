const hamburger = document.querySelector(".hamburgerMenu");
const menu = document.querySelector("ul");

const menuEvents = () => {
	hamburger.classList.toggle("open"); 
	menu.classList.toggle("open");
}

hamburger.addEventListener("click", () => menuEvents());