<?php get_header(); ?>

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
    <h2 class="primary-tit"><?php the_archive_title(); ?></h2>
    <?php 
      if(have_posts()): 
      $current_page = get_query_var('paged');
      $count = 0; 
    ?>
    <div class="primary-container">
      <?php while(have_posts()): $count++; ?>
      <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="primary-item">
        <figure class="primary-iimg">
        <?php
          if( has_post_thumbnail() ){
            the_post_thumbnail('thumbnail');
          } else{
            echo '<img src="'.esc_url(get_template_directory_uri().'/img/single.jpg').'alt="">';
          }
        ?>
        </figure>
        <div class="primary-ibody">
          <div class="primary-imeta">
          <?php
            $category = get_the_category();
            if( $category[0] ){
              echo '<div class="primary-itag">'.$category[0]->name.'</div>';
            }
          ?>
          <?php if( $current_page == 0 && $count <= 2): ?>
            <div class="primary-inew">NEW</div>
          <?php endif; ?>
          <time datetime="2021-01-01" class="primary-itime"><?php the_time('Y.n.j'); ?></time> 
          </div>
          <h3 class="primary-itit"><?php the_title(); ?></h3>
        </div>
        </a>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <?php if (paginate_links()): ?>
    <!-- pagenation -->
    <div class="pagination">
      <?php
        echo
        paginate_links(
          array(
          'end_size' => 1,
          'mid_size' => 1,
          'prev_next' => true,
          'prev_text' => '<i class="fas fa-angle-left"></i>',
          'next_text' => '<i class="fas fa-angle-right"></i>',
          )
        );
      ?>
    </div><!-- /pagenation -->
    <?php endif; ?>
    
    </main> <!-- /primary -->
    
  <?php get_sidebar(); ?>

  </div>
  </div> <!-- /content -->
  
<?php get_footer(); ?>