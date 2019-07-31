function navTransitionToggle() {
  var $el_header_nav = document.getElementById("js-header-nav");

  $el_header_nav.classList.toggle("is-active");
  if ($el_header_nav.classList.contains("is-active")) {
    $el_header_nav.setAttribute('reveal', '')
  } else {
    $el_header_nav.removeAttribute('reveal');
  }
}

document.onreadystatechange = function () {
  if (document.readyState === "complete") {
    var $el_btn_hamburger = document.getElementById("js-hamburger");
    $el_btn_hamburger.addEventListener("click", function () {
      $el_btn_hamburger.classList.toggle("is-active");  // hanburger按钮动画
      navTransitionToggle();    // navigation动画
    })
  }
};