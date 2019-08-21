<?php get_header(); ?>

<main id="top">
  <section id="top_image">
    <img src="<?= get_template_directory_uri(); ?>/img/top/hero.png" />
  </section>
  <section id="news">
    <div id="news_container">
      <div class="head_line">News</div>
      <div class="contents">
        <?php
          $news_query = new WP_Query();
          $news_query->query([
            'post_type' => 'post',
            'posts_per_page'=> 3,
          ]);
          if( $news_query->have_posts() ): while( $news_query->have_posts() ) : $news_query->the_post();
        ?>
          <a href="<?php the_permalink(); ?>">
            <article class="content">
              <div class="days">
                <div class="year"><?= get_the_date('Y'); ?></div>
                <div class="day_month">
                  <div class="day"><?= substr(get_post_time('F'), 0, 3); ?></div>
                  <div class="month"><?= get_the_date('d'); ?></div>
                </div>
                <div class="information"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
              </div>
              <div class="sentence"><?php the_title(); ?></div>
            </article>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <div class="btn_line"><a href="<?= home_url(); ?>/news" class="btn">もっとみる</a></div>
    </div>
  </section>
  <section id="introduction">
    <div id="introduction_container">
      <div class="head_line">商品紹介</div>
      <div class="product">
        <?php
          $item_query = new WP_Query();
          $item_query->query([
            'post_type' => 'item',
            'posts_per_page'=> 3,
          ]);
          if( $item_query->have_posts() ): while( $item_query->have_posts() ) : $item_query->the_post();
        ?>
          <div class="products">
            <div class="img_area">
              <img src="<?= get_field('image'); ?>" />
            </div>
            <div class="head"><?php the_title(); ?></div>
            <div class="sentence"><?php the_content(); ?></div>
          </div>
        <?php endwhile; endif; ?>
      </div>
      <!-- <div class="next_pointer_line"><div class="next_pointer">●●●●●</div></div> -->
      <div class="btn_line"><a href="<?= home_url(); ?>/product" class="btn">もっとみる</a></div>
    </div>
  </section>
  <section id="supplement">
    <div id="supplement_container">
      <div class="head_line">動物の健康とサプリの知識</div>
      <div class="items">
        <div class="item">オリゴ糖って？</div>
        <div class="item">乳酸菌って？</div>
        <div class="item">愛犬・愛猫に必要ないもの</div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
