$(".openbtn").click(function () {
    $(this).toggleClass('active');
});

function humbuger() {
  document.getElementById("hamburgerIn").classList.toggle("fadeIn");
}
document.getElementById("hamburgerarea").addEventListener("click", function () {
  humbuger();
});
