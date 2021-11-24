<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!------- メイン ------->
<main class="main">
    <!--------------------
		トップの画像
	--------------------->
    <div class="page-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_page-favorite.jpg" alt="404のイメージ画像です" class="page-header-img" />
        <div class="page-header-txt-wrap page-header-txt-wrap-favorite">
            <h2 class="h2-font top-img-title favorite-catchcopy">
                徳島で見つける、<br />
                あなた好みのうどん。
            </h2>
        </div>
    </div>

    <!------- ビジュアル ------->
    <!-- <div class="noodle-top-img-wrap">
        <img class="noodle-top-img" src="<?php //echo get_template_directory_uri();
                                            ?>/assets/img/img_noodle.jpg" alt="トップイメージ" />
    </div> -->
    <!---------- noodle-intro ---------->
    <section class="noodle-intro">
        <h2 class="h2-font">
            <span class="line-bg">徳島の麺類事情</span>
        </h2>
        <div class="noodle-intro-wrap">
            <div class="noodle-tokushima-img-wrap">
                <img class="noodle-tokushima-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_page-noodle_tokushima.jpg" alt="徳島のうどん" />
            </div>
            <div class="noodle-intro-txt">
                <p class="bold">むかしむかしせっせと働く阿波の民がおりました。</p>
                <p class="bold">「つるりと食べられるものがいい。」</p>
                <p class="bold">
                    そんな想いから徳島のうどん文化は発展していき、「なるちゅるうどん」と「たらいうどん」が生まれました。
                </p>
                <p class="bold">
                    そんな古くから愛されてきたうどんの魅力を紹介するために「阿波うどん運動」が始まりました。<br />このサイトを見て少しでも食べたいと思っていただけたらうれしいです。
                </p>
            </div>
        </div>
    </section>

    <!---------- noodle-about ---------->
    <section class="noodle-about">
        <div class="noodle-deco-img-wrap">
            <!-- かざり画像 -->
            <img class="noodle-deco-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img_page-noodle_decoration.JPG" alt="おいしいうどん" />
        </div>

        <h3 class="h3-font">「たらい」と「なるちゅる」</h3>
        <p class="bold">
            あまり聞き馴染みのないこのうどんたちは、徳島の地元民に長く愛されてきました。
        </p>
        <p class="bold">徳島でしか味わうことができないうどんを、紹介します。</p>
        <div class="next_arrow">
            <p>・</p>
            <p>・</p>
            <p>・</p>
        </div>
    </section>

    <!---------- なるちゅる説明 ---------->
    <section class="noodle-naruchuru">
        <div class="noodle-naruchuru-wrap">
            <h3 class="h3-font">なるちゅるうどん とは</h3>
            <p class="bold">どのうどんともちがう、「ちゅるちゅる」の魅力</p>
            <p class="bold">
                なるちゅるうどんは、発祥には諸説ありますが、古くから鳴門で愛されてきたご当地の個性派うどん。<br />
                2000年代、徳島の写真家である中野氏が、そのちゅるちゅるとした触感から「なるちゅる」と命名、その呼び名が定着しました。
            </p>
            <p class="bold">
                特徴は細く不揃いの、ちぢれたやわらかい麺。<br />
                煮干しを使ってあっさりとした、すこし甘みも感じる優しいおだし。<br />
                トッピングはネギと刻んだ油揚げ、鳴門名産のちくわやワカメ。<br />
                とってもシンプルで、毎日食べても飽きない優しいうどんです。
            </p>
        </div>
        <p class="bold-2">
            一口食べれば、あなたも<br />「ちゅるちゅる」の<br />意味が分かります。
        </p>
        <div class="noodle-arrow-img-wrap">
            <img class="noodle-arrow-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_page-noodle_arrow.png" alt="矢印" />
        </div>
        <button onclick="location.href='archives/shop_type/naruchuru'" class="btn-blue">
            なるちゅるうどんの店舗一覧へ
        </button>
    </section>

    <!---------- たらい説明 ---------->
    <section class="noodle-tarai">
        <div class="noodle-tarai-wrap">
            <h3 class="h3-font">たらいうどん とは</h3>
            <p class="bold">
                たらいうどんは、徳島県阿波市に伝わる、江戸時代末期から愛されてきた郷土料理です。
            </p>
            <p class="bold">
                特徴は、その名の通り大きなたらいに入っていること。これをみんなで囲んで食べるのです。<br />
                昔、木こりたちが仕事納めなどの際に、振る舞いご飯として食べていたのがが始まりだそう。
            </p>
            <p class="bold">
                大きなたらいに、ゆで汁ごと入った太めのもっちり釜揚げうどん。<br />湯気が立ちのぼるあつあつの麺を、うまみの詰まった出汁つゆをつけて食べます。
            </p>
            <p class="bold">
                たらいのフチで麺を湯切りしながら食べるのがコツ。<br />
                出汁つゆは卵が入っていたりとお店によって味わいが変わり、様々なうどんを楽しめます。
            </p>
        </div>
        <p class="bold-2">探してみましょう。<br />あなたの好きな味</p>
        <div class="noodle-arrow-img-wrap">
            <img class="noodle-arrow-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_page-noodle_arrow.png" alt="矢印" />
        </div>
        <button onclick="location.href='archives/shop_type/tarai'" class="btn-blue">
            たらいうどんの店舗一覧へ
        </button>
    </section>

    <!---------- 徳島の麺なかまたち（はしやすめ） ---------->
    <section class="noodle-kind">
        <h3 class="h3-font">徳島の麺なかまたち</h3>

        <!--吹き出し-->
        <div class="bln ramen">
            <div class="says">
                <p class="says-txt">
                    徳島ラーメンは、甘辛い豚バラ肉と生卵のトッピングが特徴のラーメン。お店によって主に茶系・白系・黄系のスープに分類されます。
                </p>
            </div>
        </div>
        <div class="bln iya-soba">
            <div class="says">
                <p class="says-txt">
                    祖谷そばは、太く短い麺が特徴。つなぎとなる小麦粉などをほとんど使用しないためそば粉の割合が多く、そば本来の風味が楽しめます。
                </p>
            </div>
        </div>
        <div class="bln handa-somen">
            <div class="says">
                <p class="says-txt">
                    半田そうめんは、うどんとそうめんの間のような太めのめんが特徴。のどごしが良くコシが強いもちもち麺は、つゆとよく絡みます。
                </p>
            </div>
        </div>
        <!--吹き出しおわり-->
    </section>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
