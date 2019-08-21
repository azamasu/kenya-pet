<?php get_header(); ?>

<style>
  #news-index {
    min-height: 600px;
    width: 900px;
    margin: 0 auto 80px;
    color: #485254;
  }
  #news-index h1 {
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    padding: 60px 0 80px;
  }
  @media (max-width: 1080px) {
    #news-index {
      width: 700px;
    }
  }
  @media (max-width: 800px) {
    #news-index {
      width: 90%;
    }
  }
</style>
<main id="news-index">
  <h1>ニュース</h1>

  <style>
    #news-index .categories {
      display: flex;
      margin-bottom: 60px;
      border: 3px solid #b6dbe2;
    }
    #news-index .categories > a {
      display: black;
      flex: 1;
      text-align: center;
      color: #485254;
      padding: 12px 0;
      cursor: pointer;
    }
    #news-index .categories > a.active {
      background-color: #b6dbe2;
      color: white;
      font-weight: bold;
      cursor: not-allowed;
    }
    #news-index .categories > a + a {
      border-left: 3px solid #b6dbe2;
    }
    @media (max-width: 600px) {
      #news-index .categories {
        font-size: 0.8rem;
      }
    }
    @media (max-width: 400px) {
      #news-index .categories {
        margin-bottom: 40px;
      }
      #news-index .categories > a {
        flex: auto;
      }
    }
  </style>
  <?php $category_name = get_queried_object()->category_nicename;?>
  <section class="categories">
    <a class="<?php if (!$category_name) { echo 'active'; } ?>" href="<?= home_url(); ?>/news">全て</a>
    <a class="<?php if ($category_name === "release") { echo 'active'; } ?>" href="<?= home_url(); ?>/archives/category/release">ニュースリリース</a>
    <a class="<?php if ($category_name === "news") { echo 'active'; } ?>" href="<?= home_url(); ?>/archives/category/news">お知らせ</div>
  </section>

  <style>
    #news-index article .news-link {
      display: flex;
      align-items: center;
      color: #485254;
      border-top: 1px solid #b6dbe2;
      padding: 20px 0;
    }
    #news-index article:last-child .news-link {
      border-bottom: 1px solid #b6dbe2;
    }
    #news-index article .meta {
      display: flex;
    }
    #news-index article .date {
      width: 100px;
    }
    #news-index article .category {
      width: 160px;
      padding: 0 16px;
    }
    #news-index article .category span {
      display: block;
      padding: 2px 12px;
      border-radius: 100px;
      background-color: #485254;
      color: #eee;
      font-size: 0.8rem;
      text-align: center;
    }
    #news-index article .title {
      flex: 1;
    }
    #news-index .pagination {
      text-align: center;
      margin-top: 40px;
    }
    @media (max-width: 600px) {
      #news-index article .news-link {
        flex-direction: column;
        align-items: flex-start;
      }
      #news-index article .meta {
        margin-bottom: 10px;
      }
      #news-index article .date {
        width: 90px;
      }
    }
  </style>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article>
    <a href="<?php the_permalink(); ?>" class="news-link">
      <div class="meta">
        <div class="date"><?= get_the_date('Y.n.j'); ?></div>
        <div class="category">
          <span>
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
          </span>
        </div>
      </div>
      <h2 class="title"><?php the_title(); ?></h2>
    </a>
  </article>
  <?php endwhile; endif; ?>

  <div class="pagination">
    <?php
    global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 4,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '&laquo; Prev',
        'next_text' => 'Next &raquo;',
    ));
    ?>
  </div>
</main>

<?php get_footer(); ?>
