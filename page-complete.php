<?php get_header(); ?>

<main id="complete">
  <div id="container">
    <?php get_template_part( "template/contact-headline" ); ?>
    <?php get_template_part( "template/contact-step" ); ?>
    <div class="text_area">
      『確認メール』が届いていない場合は、<br>
      【メールアドレスが間違っている】<br>
      【迷惑メールフォルダに入っている】<br>
      【info@kenyasupplement.co.jpからの受信が許可されていない（携帯アドレス）】<br>
      などの可能性があります。ご確認ください。
    </div>
    <div class="send">
      <a href="<?= home_url(); ?>" class="send_btn">
        トップページに戻る
      </a>
    </div>
  </div>
</main>

<?php get_footer(); ?>