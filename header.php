<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.9.1/build/cssreset/cssreset-min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/common.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/header.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/footer.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/template/contact-step.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/template/contact-headline.css" />
    <?php $page = get_post(get_the_ID()); $slug = $page->post_name; ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style/pages/<?= $slug; ?>.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <header id="header">
      <div id="navigation_bar">
        <div id="img_and_nav">
          <a href="<?= home_url(); ?>/top" class="title_img">
            <img src="<?= get_template_directory_uri(); ?>/img/logo.png" />
          </a>
          <div class="nav">
            <a href="<?= home_url(); ?>/history" class="nav_items">ヒストリー</a>
            <a href="<?= home_url(); ?>/product" class="nav_items">商品紹介</a>
            <a href="<?= home_url(); ?>/about" class="nav_items">Kenyaのサプリメント研究</a>
            <a href="<?= home_url(); ?>/knowledge" class="nav_items">動物の健康とサプリの知識</a>
            <a href="<?= home_url(); ?>/company" class="nav_items">会社概要</a>
            <a href="<?= home_url(); ?>/contact" class="nav_items">お問い合わせ</a>
          </div>
        </div>
      </div>
      <div class="toggle">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </header>
    <nav class="global_nav">
      <ul>
        <li class="nav_li"><a href="<?= home_url(); ?>/history" class="nav_items">ヒストリー</a></li>
        <li class="nav_li"><a href="<?= home_url(); ?>/product" class="nav_items">商品紹介</a></li>
        <li class="nav_li"><a href="<?= home_url(); ?>/about" class="nav_items">Kenyaのサプリメント研究</a></li>
        <li class="nav_li"><a href="<?= home_url(); ?>/knowledge" class="nav_items">動物の健康とサプリの知識</a></li>
        <li class="nav_li"><a href="<?= home_url(); ?>/company" class="nav_items">会社概要</a></li>
        <li class="nav_li"><a href="<?= home_url(); ?>/contact" class="nav_items">お問い合わせ</a></li>
      </ul>
    </nav>
    <script>
      $(function() {
        $(".toggle").click(function() {
          $(this).toggleClass("active");
          if ($(this).hasClass("active")) {
            $(".global_nav").addClass("active");
          } else {
            $(".global_nav").removeClass("active");
          }
        });
      });
    </script>