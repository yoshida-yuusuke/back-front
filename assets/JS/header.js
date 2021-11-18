$(".openbtn").click(function () {
    $(this).toggleClass('active');
});

function humbuger() {
  document.getElementById("humbugerIn").classList.toggle("fadeIn");
}
document.getElementById("humbugerarea").addEventListener("click", function () {
  humbuger();
});
