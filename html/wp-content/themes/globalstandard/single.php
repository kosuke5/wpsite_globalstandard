<?php get_header() ?>

  <!-- top -->
  <section class="top _news">
  <div class="top-inner">
  <div class="top-content">
  <h1 class="top-tit">NEWS</h1>
  <p class="top-subtit">ニュース</p>
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
  
    <!-- primary -->
    <main class="primary">
    
    <!-- entry -->
    <article class="entry">
    <div class="entry-header">
    <div class="entry-meta">
    <?php 
      $category = get_the_category();
      if($category[0]){
        echo '<div class="entry-category">'. $category[0]->name. '</div>';
      }
    ?>
    <time datetime="<?php the_time('Y-m-d'); ?>" class="entry-time"><?php the_time('Y.n.j'); ?></time>
    </div>
    <h1 class="entry-tit"><?php the_title(); ?></h1>
    <div class="entry-thumbnail">
    <?php
      if(has_post_thumbnail()){
        the_post_thumbnail('large');
      } else{
        echo '<img src="'. esc_url(get_template_directory_uri().'/img/single.jpg'). '" alt="投稿の見出し画像です">';
      }
    ?>
    </div>
    </div>
    <div class="entry-body">
      <h2>H2見出しH2見出しH2見出し</h2>
      <p>ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p>
      <h3>H3見出しH3見出しH3見出し</h3>
      <p>ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p>
      <h4>H4見出しH4見出しH4見出し</h4>
      <p>ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p>
      <ul>
        <li>リスト</li>
        <li>リスト</li>
        <li>リスト</li>
      </ul>
      <blockquote>
      <p>引用した文章が入ります。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。</p>
      </blockquote>
    </div>
    <div class="entry-pn">
    <div class="entry-pnbtn _prev"><?php previous_post_link('%link', '＜前の記事へ') ?></div>
    <div class="entry-pnbtn _next"><?php next_post_link('%link', '次の記事へ＞') ?></div>
    </div>
    </article> <!-- /entry -->

    </main> <!-- /primary -->
    
    <?php get_sidebar(); ?>

  </div>
  </div> <!-- /content -->
  
<?php get_footer(); ?>