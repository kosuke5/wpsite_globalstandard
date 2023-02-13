<!-- sidebar -->
<aside class="sidebar">

  <!-- widget_new -->
  <div class="wnew">
  <div class="wnew-tit">新着記事</div>
  <?php
    $my_query = new WP_Query(
      array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 5
      )
    );
  ?>
  <div class="wnew-container">
  <?php while($my_query->have_posts()): $my_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="wnew-item">
    <figure class="wnew-iimg">
    <?php
      if( has_post_thumbnail() ){
        the_post_thumbnail('thumbnail');
      } else{
        echo '<img src="'.esc_url(get_template_directory_uri().'/img/single.jpg').'alt="">';
      }
    ?>
    </figure>
    <div class="wnew-ibody">
        <div class="wnew-imeta">
        <?php
          $category = get_the_category();
          if($category[0]){
            echo '<div class="wnew-itag">'.$category[0]->name.'</div>';
          }
        ?>
        <time datetime="<?php the_time('Y-m-d'); ?>" class="wnew-itime"><?php the_time('Y.n.j'); ?></time> 
        </div>
        <h3 class="wnew-itit">
        <?php
          if(mb_strlen($post->post_title) > 20){
            echo mb_substr($post->post_title, 0, 20) . '...';
          } else{
            echo $post->post_title;
          }
        ?>
        </h3>
    </div>
    </a>
  <?php endwhile; wp_reset_postdata(); ?>
  </div>
  </div> <!-- /widget_new -->

  <!-- widget_category -->
  <div class="wcategory">
  <div class="wcategory-tit">カテゴリ</div>
  <ul class="wcategory-list">
  <?php 
    $categories = get_categories(); 
    foreach($categories as $category):
  ?>
  <li class="wcategory-item"><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo $category->name; ?></a></li>
  <?php endforeach; ?>
  </ul>
  </div> <!-- /widget_category -->

</aside> <!-- /sidebar -->