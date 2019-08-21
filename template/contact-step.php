<?php $page = get_post(get_the_ID()); $slug = $page->post_name; ?>

<div id="contact-step">
  <div class="input_step">
    <div class="step <?= $slug === 'contact' ? 'active' : ''; ?>">お問い合わせ内容の入力</div>
    <div class="step <?= $slug === 'confirm' ? 'active' : ''; ?>">お問い合わせ内容の確認</div>
    <div class="step <?= $slug === 'complete' ? 'active' : ''; ?>">送信完了</div>
  </div>
  <div class="phone_ver">
    <div class="step_line">
      <div class="step <?= $slug === 'contact' ? 'active' : ''; ?>"></div>
      <div class="step <?= $slug === 'confirm' ? 'active' : ''; ?>"></div>
      <div class="step <?= $slug === 'complete' ? 'active' : ''; ?>"></div>
    </div>
    <div class="step_content">
      <div class="step">お問い合わせの入力</div>
      <div class="step">入力内容の確認</div>
      <div class="step">送信完了</div>
    </div>
  </div>
</div>
