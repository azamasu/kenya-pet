<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
if ($slug === "contact") {
  $description = 'メディア掲載、取材に関するお問い合わせ、製品のお取り扱いについてなど、<br>法人・販売店の方からのご質問等は以下のコンタクトフォームよりお問い合わせください。<br>';
} else if ($slug === "confirm") {
  $description = '以下の内容で間違いがなければ、<br>「送信する」ボタンを押してください。';
} else if ($slug === "complete") {
  $description = 'お問い合わせを送信しました。<br>『確認メール』が自動送信されておりますのでご確認ください。';
}
?>

<div id="contact-headline">
  <h2 class="headline">お問い合わせ</h2>
  <p class="description"><?= $description; ?></p>
</div>