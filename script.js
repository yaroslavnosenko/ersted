const initNavigation = () => {
  const main_navigation = document.querySelector("#primary-menu");
  const secondary_navigation = document.querySelector("#secondary-menu");
  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
      secondary_navigation.classList.toggle("hidden");
    });
};

const initTopButton = () => {
  const top_button = document.querySelector("#top");
  document.querySelector("#top").addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
  window.addEventListener("scroll", function () {
    if (window.scrollY > 10) {
      top_button.classList.add("bottom-4");
      top_button.classList.remove("-bottom-20");
    } else {
      top_button.classList.add("-bottom-20");
      top_button.classList.remove("bottom-4");
    }
  });
};

const main = () => {
  initNavigation();
  initTopButton();
};

window.addEventListener("load", main);
