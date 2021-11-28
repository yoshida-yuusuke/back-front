$(".openbtn").click(function () {
    $(this).toggleClass('active');
});

function humbuger() {
  document.getElementById("hambugerIn").classList.toggle("fadeIn");
}
document.getElementById("hambugerarea").addEventListener("click", function () {
  humbuger();
});
