var clique = document.getElementById("btn_open_menu");
var menuLateral = document.getElementById("mobile_menu");
var fixed = document.getElementById("header_topo");
var fixed_menu_type_2 = document.getElementById("menu_type_2");

clique.onclick = function(e) {
  e.preventDefault();
  menuLateral.classList.toggle("toggleMenu");
  fixed.classList.toggle("header_topo_fixed");
  fixed_menu_type_2.classList.toggle("menu_type_2_fixed");
};

