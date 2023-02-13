<?php get_header(); ?>

  <!-- mv(main visual) -->
  <section class="mv">
  <div class="mv-inner">
  <!-- <figure class="mv-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-mv01_pc.jpg" alt="サイトのメインビジュアル画像です。"></figure> -->
  <div class="mv-img">
  <div>
    <picture class="mv-imgcontainer">
    <source media="(max-width: 767px)" srcset="../img/mv01_sp.jpg">
    <img src="<?php echo get_template_directory_uri() ?>/img/mv01_pc.jpg" alt="サイトのメインビジュアル画像です。">
    </picture>
  </div>
  <div>
    <picture class="mv-imgcontainer">
    <source media="(max-width: 767px)" srcset="../img/mv02_sp.jpg">
    <img src="<?php echo get_template_directory_uri() ?>/img/mv02_pc.jpg" alt="サイトのメインビジュアル画像です。">
    </picture>
  </div>
  <div>
    <picture class="mv-imgcontainer">
    <source media="(max-width: 767px)" srcset="../img/mv03_sp.jpg">
    <img src="<?php echo get_template_directory_uri() ?>/img/mv03_pc.jpg" alt="サイトのメインビジュアル画像です。">
    </picture>
  </div>
  </div>
  <div class="mv-content">
  <h1 class="mv-tit">
  <div class="mv-ttext">
  <div class="mv-ttext_first">YOU CAN</div>
  <div class="mv-ttext_second">CHANGE</div>
  </div>
  <div class="mv-ttext">
  <div class="mv-ttext_third">THE WORLD</div>
  </div>
  </h1>
  <p class="mv-subtit">世界で活躍できるグローバルな人材を育てる</p>
  </div>
  </div>
  </section> <!-- /mv -->

  <!-- about -->
  <section class="about">
  <div class="about-inner">
  <div class="about-sectit">
    <div class="about-sectitleft">
    <h2 class="about-tit">ABOUT US</h2>
    <p class="about-ttext">当社について</p>
    </div>
    <div class="about-sectitright">
    <div class="about-link"><a href="#">View more</a></div>
    </div>
  </div>
  <div class="about-container">
    <div class="about-content">
    <p class="about-txt">
    急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。<br><br>
    コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。<br><br>
    文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
    </p>
    </div>
    <div class="about-imwrapper">
    <figure class="about-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-company.jpg" alt="会社イメージ画像です。"></figure>
    <div class="about-linksp"><a href="#">View more</a></div>
    <div class="about-imbg"><div class="about-imbgcolor"></div></div>
    </div>
  </div>
  </div>
  <div class="about-bg">
  <div class="about-bgcolor"></div>
  </div>
  </section> <!-- /about -->

  <!-- service -->
  <section class="service">
  <div class="service-inner">
  <div class="service-sectit">
    <div class="service-sectitleft">
    <h2 class="service-tit">SERVICE</h2>
    <p class="service-ttext">サービス</p>
    </div>
    <div class="service-sectitright">
    <div class="service-link"><a href="#">View more</a></div>
    </div>
  </div>
  <div class="service-container">
  <ul class="service-list">
    <li class="service-item">
    <div class="service-number">01</div>
    <div class="service-wrapper">
    <h3 class="service-itit"><span>ビジネス英語研修</span></h3>
    <figure class="service-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-service01.jpg" alt="各種サービスのイメージ画像です。"></figure>
    </div>
    <p class="service-txt">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。</p>
    </li>
    <li class="service-item">
    <div class="service-number">02</div>
    <div class="service-wrapper">
    <h3 class="service-itit"><span>異文化</span><span>コミュニケーション研修</span></h3>
    <figure class="service-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-service02.jpg" alt="各種サービスのイメージ画像です。"></figure>
    </div>
    <p class="service-txt">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
    </li>
    <li class="service-item">
    <div class="service-number">03</div>
    <div class="service-wrapper">
    <h3 class="service-itit"><span>ビジネス留学</span><span>サポートプログラム</span></h3>
    <figure class="service-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-service03.jpg" alt="各種サービスのイメージ画像です。"></figure>
    </div>
    <p class="service-txt">将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。</p>
    </li>
  </ul>
  </div>
  <div class="service-linksp"><a href="#">View more</a></div>
  </div>
  </section> <!-- /service -->

  <!-- casestudy -->
  <section class="casestudy">
  <div class="casestudy-inner">
  <div class="casestudy-sectit">
    <div class="casestudy-sectitleft">
    <h2 class="casestudy-tit">CASE STUDY</h2>
    <p class="casestudy-ttext">導入事例</p>
    </div>
    <div class="casestudy-sectitright">
    <div class="casestudy-link"><a href="#">View more</a></div>
    </div>
  </div>
  <div class="casestudy-container">
  <ul class="casestudy-list">
    <li class="casestudy-item">
    <a href="#" class="casestudy-media">
    <figure class="casestudy-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-case-a.jpg" alt="導入先企業のイメージ画像です。"></figure>
    <h3 class="casestudy-corpname">AAA株式会社　様</h3>
    <div class="casestudy-category">ビジネス英語研修</div>
    </a>
    </li>
    <li class="casestudy-item">
    <a href="#" class="casestudy-media">
    <figure class="casestudy-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-case-b.jpg" alt="導入先企業のイメージ画像です。"></figure>
    <h3 class="casestudy-corpname">合同会社BBB　様</h3>
    <div class="casestudy-category">異文化コミュニケーション</div>
    </a>
    </li>
    <li class="casestudy-item">
    <a href="#" class="casestudy-media">
    <figure class="casestudy-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-case-c.jpg" alt="導入先企業のイメージ画像です。"></figure>
    <h3 class="casestudy-corpname">株式会社CCC　様</h3>
    <div class="casestudy-category">ビジネス留学プログラム</div>
    </a>
    </li>
    <li class="casestudy-item">
    <a href="#" class="casestudy-media">
    <figure class="casestudy-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-case-d.jpg" alt="導入先企業のイメージ画像です。"></figure>
    <h3 class="casestudy-corpname">DDD株式会社　様</h3>
    <div class="casestudy-category">異文化コミュニケーション</div>
    </a>
    </li>
    <li class="casestudy-item">
    <a href="#" class="casestudy-media">
    <figure class="casestudy-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-case-e.jpg" alt="導入先企業のイメージ画像です。"></figure>
    <h3 class="casestudy-corpname">EEE株式会社　様</h3>
    <div class="casestudy-category">ビジネス留学プログラム</div>
    </a>
    </li>
    <li class="casestudy-item">
    <a href="#" class="casestudy-media">
    <figure class="casestudy-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-case-f.jpg" alt="導入先企業のイメージ画像です。"></figure>
    <h3 class="casestudy-corpname">FFF株式会社　様</h3>
    <div class="casestudy-category">ビジネス英語研修</div>
    </a>
    </li>
  </ul>
  </div>
  <div class="casestudy-linksp"><a href="#">View more</a></div>
  </div>
  <div class="casestudy-bg">
  <div class="casestudy-bgcolor"></div>
  </div>
  </section> <!-- /casestudy -->

  <!-- news -->
  <section class="news">
  <div class="news-inner">
  <div class="news-sectit">
    <div class="news-sectitleft">
    <h2 class="news-tit">NEWS</h2>
    <p class="news-ttext">新着情報</p>
    </div>
    <div class="news-sectitright">
    <div class="news-link"><a href="#">View more</a></div>
    </div>
  </div>
  <div class="news-container">
  <ul class="news-list">
    <li class="news-item">
    <a href="#" class="news-media">
    <div class="news-info">
    <div class="news-label">営業時間</div>
    <time class="news-time" datetime="2021-07-20">2021.07.20</time>
    </div>
    <h3 class="news-itit">お盆期間中の営業について</h3>
    </a>
    </li>
    <li class="news-item">
    <a href="#" class="news-media">
    <div class="news-info">
    <div class="news-label">その他</div>
    <time class="news-time" datetime="2021-06-01">2021.06.01</time>
    </div>
    <h3 class="news-itit">新型コロナウイルス対策ご協力のお願い</h3>
    </a>
    </li>
    <li class="news-item">
    <a href="#" class="news-media">
    <div class="news-info">
    <div class="news-label">その他</div>
    <time class="news-time" datetime="2021-05-01">2021.05.01</time>
    </div>
    <h3 class="news-itit">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3>
    </a>
    </li>
  </ul>
  </div>
  <div class="news-linksp"><a href="#">View more</a></div>
  </div>
  </section> <!-- /news -->

<?php get_footer(); ?>