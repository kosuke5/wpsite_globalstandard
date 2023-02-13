<?php
/*
Template Name: Download-thanks
*/
get_header();
?>

  <!-- top -->
  <section class="top _download">
  <div class="top-inner">
  <div class="top-content">
  <h1 class="top-tit">DOWNLOAD</h1>
  <p class="top-subtit">資料ダウンロード</p>
  </div>
  </div>
  </section> <!-- /top -->

  <!-- breadcrumb -->
  <div class="breadcrumb">
  <div class="breadcrumb-inner">
  <?php
    if(function_exists('bcn_display')){
      bcn_display();
    }
  ?>
  </div>
  </div>
  <!-- /breadcrumb -->

  <!-- content -->
  <div class="content">
  <div class="content-inner">
  
  <!-- product -->
  <div class="product">
  <div class="product-tit">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</div>
  <figure class="product-img"><img src="<?php echo esc_url(get_template_directory_uri().'/img/pamphlet.jpg'); ?>" alt="研修教材のイメージ画像です"></figure>
  <p class="product-text">
    急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>
    ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br><br>
    英語に苦手意識のある方でもご安心ください。<br>
    ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>1
    まずはこちらの資料をごらんください。
  </p>
  </div> <!-- product -->

  <!-- thanks -->
  <div class="thanks">
  <h2 class="thanks-tit">資料請求いただき<br>ありがとうございました！</h2>
  <p class="thanks-text">資料は以下のリンクよりダウンロードください。</p>
  <a href="#" class="thanks-link">資料のダウンロードリンクはこちら</a>
  <p class="thanks-text">
  また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。
  </p>
  </div> <!-- /thanks -->

  </div>
  </div> <!-- /content -->
  
  
<?php get_footer(); ?>