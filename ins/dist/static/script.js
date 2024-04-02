const headerNav = document.querySelector(".header__nav");
const burgerBtn = document.querySelector(".toggle__menu");
burgerBtn.addEventListener("click", () => {
  burgerBtn.classList.toggle("open");
  headerNav.classList.toggle("open");
});

const header = document.querySelector(".header");
window.console.log(scrollY);
window.addEventListener("scroll", () => {
  if (window.scrollY >= 100) {
    header.classList.add("dark");
  } else {
    header.classList.remove("dark");
  }
});
