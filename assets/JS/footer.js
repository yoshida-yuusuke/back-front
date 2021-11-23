

//---------------------------
// -------検索フォーム-------
// --------------------------


$(".search-form-tab").click(function () {//ボタンがクリックされたら
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#searchForm-js").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});
$(".serch-title").click(function () {//ボタンがクリックされたら
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
});
$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});



//---------------------------
// -----TOPへもどるボタン-----
// --------------------------

 // TOPへ戻るボタン追従
 $(function () {
  // 変数にクラスを入れる
 var btn = $(".js-backTop");

  //スクロールしてページトップから100に達したらボタンを表示
 $(window).on("load scroll", function () {
  if ($(this).scrollTop() > 300) {
    btn.addClass("active");
  } else {
    btn.removeClass("active");
   }
 });

  //スクロールしてトップへ戻る
btn.on("click", function () {
  $("body,html").animate({
    scrollTop: 0,
  });
});
 });
