<?php
/*
Template Name: Download
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

  <!-- form -->
  <div class="form">
  <h2 class="form-tit">資料ダウンロード</h2>
  <div class="form-container">
  <form action="page-download-thanks.html" method="post" class="form-body">
  <?php echo do_shortcode('[contact-form-7 id="5" title="資料ダウンロード"]'); ?>
  </form>
  </div>
  </div> <!-- /form -->

  </div>
  </div> <!-- /content -->
  
  
<?php get_footer(); ?>