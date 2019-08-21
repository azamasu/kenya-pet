<?php get_header(); ?>

<style>
  #news-single {
    min-height: 600px;
    width: 900px;
    margin: 60px auto 80px;
    color: #485254;
  }
  #news-single .meta {
    padding-bottom: 16px;
  }
  #news-single .meta .date {
    color: #485254;
    margin-bottom: 8px;
  }
  #news-single .meta .title {
    font-size: 1.4rem;
    line-height: 1.4;
  }
  #news-single .content {
    border-top: 3px solid #b6dbe2;
    border-bottom: 3px solid #b6dbe2;
    padding: 40px 0 60px;
  }
  #news-single .content h1 {
    position: relative;
    background-color: #b6dbe2;
    color: #fff;
    border-radius: 6px;
    margin-bottom: 40px;
    font-size: 1.6rem;
    font-weight: bold;
    padding: 12px 16px;
  }
  #news-single .content h1::before {
    position: absolute;
    bottom: -12px;
    left: 45px;
    margin-left: -15px;
    border-top: 12px solid;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-top-color: #b6dbe2;
    content: "";
  }
  #news-single .content h2 {
    padding: 8px 16px;
    font-size: 1.2rem;
    font-weight: bold;
    color: #fff;
    background: #b6dbe2;
    border-bottom: solid 3px #5ca2af;
    margin-bottom: 30px;
  }
  #news-single .content h3 {
    padding: 8px 16px;
    font-size: 1.1rem;
    font-weight: bold;
    color: #fff;
    background: #b6dbe2;
    margin-bottom: 30px;
  }
  #news-single .content h4 {
    padding: 8px 8px;
    font-size: 1.1rem;
    font-weight: bold;
    border-top: solid 3px #b6dbe2;
    border-bottom: solid 3px #b6dbe2;
    margin-bottom: 30px;
  }
  #news-single .content h5 {
    padding: 8px 0;
    font-size: 1.1rem;
    font-weight: bold;
    border-bottom: solid 3px #b6dbe2;
    margin-bottom: 30px;
  }
  #news-single .content h6 {
    display: inline-block;
    padding: 8px 0;
    font-size: 1rem;
    font-weight: bold;
    border-bottom: solid 3px #b6dbe2;
    margin-bottom: 30px;
  }
  #news-single .content h4 {
    font-size: 1.1rem;
    border-top: solid 3px #b6dbe2;
    border-bottom: solid 3px #b6dbe2;
    margin-bottom: 30px;
  }
  #news-single .content img {
    width: auto;
  }
  #news-single .pagination {
    display: flex;
    justify-content: space-between;
    padding: 16px 4px;
  }
  @media (max-width: 1080px) {
    #news-single {
      width: 700px;
    }
  }
  @media (max-width: 800px) {
    #news-single {
      width: 90%;
    }
  }
</style>
<main id="news-single">
  <?php while (have_posts()) : the_post(); ?>
  <article>
    <div class="meta">
      <div class="date"><?= get_the_date('Y.n.j'); ?></div>
      <h1 class="title"><?php the_title(); ?></h1>
    </div>
    <div class="content"><?php the_content() ?></div>

    <div class="pagination">
      <div>
        <?php previous_post_link('%link', '« Prev'); ?>
      </div>
      <a href="<?= home_url(); ?>/news">一覧に戻る</a>
      <div>
          <?php next_post_link('%link', 'Next »'); ?>
      </div>
    </div>
  </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
