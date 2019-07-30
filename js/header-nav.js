
document.onreadystatechange = function () {
  if (document.readyState === "complete") {
      var $el_btn_hamburger = document.getElementById("js-hamburger");
      var $el_header_nav = document.getElementById("js-header-nav");

      $el_btn_hamburger.addEventListener("click", function () {
          $el_btn_hamburger.classList.toggle("is-active");
          $el_header_nav.classList.toggle("is-active");
      })
  }
};