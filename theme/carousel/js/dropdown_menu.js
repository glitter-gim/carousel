document.addEventListener("DOMContentLoaded", function () {
  let dropdowns = document.querySelectorAll(".dropdown");
  dropdowns.forEach(dropdown => {
    dropdown.addEventListener("mouseenter", function () {
      let menu = this.querySelector(".dropdown-menu");
      menu.classList.add("show");
    });
    dropdown.addEventListener("mouseleave", function () {
      let menu = this.querySelector(".dropdown-menu");
      menu.classList.remove("show");
    });
  });
});
