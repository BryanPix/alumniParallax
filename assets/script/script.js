// Popup
window.onload = () => {
  let popup = document.querySelector(".popup");
  popup.style.display = "block";
};
// Fermeture du popup quand on clique sur la croix :D
let closeBtn = document.querySelector(".close-btn");
closeBtn.addEventListener("click", function () {
  let popup = document.querySelector(".popup");
  popup.style.display = "none";
});


let mybutton = document.getElementById("Btn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

