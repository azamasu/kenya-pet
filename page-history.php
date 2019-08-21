<?php get_header(); ?>

<style>
  #history {
    color: #485254;
  }
</style>
<main id="history">
  <style>
    #history #top_area {
      padding: 120px 0 80px;
      display: flex;
      justify-content: center;
      background-image: url("<?= get_template_directory_uri() ?>/img/history/inubokashi.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
    #history #top_area #container {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 620px;
      color: white;
    }
    #history #top_area #container .sentence {
      font-weight: bold;
      font-size: 34px;
      letter-spacing: 2px;
      margin-bottom: 100px;
      text-align: center;
    }
    #history #top_area #container .sentence p + p {
      margin-top: 30px;
    }
    #history #top_area #container .scroll_area {
      display: flex;
    }
    #history #top_area #container .scroll_area i {
      font-size: 60px;
      margin-right: 15px;
    }
    #history #top_area #container .scroll_area .scroll_sentence {
      writing-mode: vertical-rl;
      transform: rotate(180deg);
    }
    @media (max-width: 800px) {
      #history #top_area {
        padding: 50px 12px 70px;
      }
      #history #top_area #container .sentence {
        margin-bottom: 0;
        font-size: 18px;
      }
      #history #top_area #container .scroll_area {
        display: none;
      }
    }
    @media (max-width: 320px) {
      #history #top_area #container {
        width: 80%;
        text-align: center;
      }
    }
  </style>
  <div id="top_area">
    <div id="container">
      <div class="sentence">健やかでこころ豊かな社会をめざして</div>
      <div class="scroll_area">
        <i class="fas fa-chevron-circle-down"></i>
        <div class="scroll_sentence">Scroll</div>
      </div>
    </div>
  </div>

  <style>
    #history #message_area {
      display: flex;
      justify-content: center;
      padding: 120px 0 60px;
    }
    #history #message_area #container {
      width: 660px;
      color: rgb(65, 64, 64);
    }
    #history #message_area #container .head {
      font-weight: bold;
      font-size: 34px;
      display: flex;
      justify-content: center;
      letter-spacing: 5px;
      margin-bottom: 36px;
    }
    #history #message_area #container .sentence {
      line-height: 1.8;
      font-weight: bold;
      text-align: center;
      position: relative;
      padding-bottom: 100px;
    }
    #history #message_area #container .sentence p + p {
      margin-top: 30px;
    }
    #history #message_area #container .sentence img {
      width: 100px;
      position: absolute;
      right: 60px;
      bottom: 0;
    }
    @media (max-width: 800px) {
      #history #message_area {
        padding: 80px 0 50px;
      }
      #history #message_area #container {
        width: 80%;
      }
      #history #message_area #container .head {
        font-size: 18px;
      }
      #history #message_area #container .sentence {
        font-size: 14px;
        padding-bottom: 70px;
      }
      #history #message_area #container .sentence p br {
        display: none;
      }
      #history #message_area #container .sentence img {
        width: 80px;
        right: 0;
      }
    }
  </style>
  <div id="message_area">
    <div id="container">
      <div class="head">TOP MASSAGE</div>
      <div class="sentence">
        <p>
          Kenyaの描く未来は、やさしい”笑顔”あふれる豊かな社会。<br />創業以来の思いと技術の蓄積を生かし、挑戦心を持って、<br />「ペット」を通じて皆様に求められる企業を目指します。
        </p>
        <p>
          日常生活の中での優しさや思いやりが"笑顔"を生み連鎖する。<br />優しさから生まれる笑顔にあふれる社会を作っていきたい。<br />そんな思いを優しい笑顔あふれる社会という言葉に込めました。
        </p>
        <img src="<?= get_template_directory_uri(); ?>/img/history/sign.png" />
      </div>
    </div>
  </div>

  <style>
    #history #idea_area {
      display: flex;
      justify-content: center;
      padding: 100px 0 190px;
      background-image: url("<?= get_template_directory_uri() ?>/img/history/principle.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
    }
    #history #idea_area #container {
      width: 580px;
      color: rgb(65, 64, 64);
    }
    #history #idea_area #container .head {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 80px;
      letter-spacing: 3px;
    }
    #history #idea_area #container .sentence {
      font-size: 24px;
      font-weight: bold;
      line-height: 1.8;
      text-align: center;
    }
    @media (max-width: 800px) {
      #history #idea_area {
        padding: 80px 0 80px;
      }
      #history #idea_area #container {
        width: 84%;
      }
      #history #idea_area #container .head {
        font-size: 20px;
        margin-bottom: 20px;
        letter-spacing: 4px;
      }
      #history #idea_area #container .sentence {
        font-size: 15px;
      }
      #history #idea_area #container .sentence br {
        display: none;
      }
    }
  </style>
  <div id="idea_area">
    <div id="container">
      <div class="head">私たちの経営理念</div>
      <div class="sentence">
        <p>
          探究心の結晶である最先端の技術を活かし、<br />私たちにしかできないサービスをお届けすることで、<br />健康で幸せな生活に貢献し豊かな社会を作る
        </p>
      </div>
    </div>
  </div>

  <style>
    #history #product_information_area {
      display: flex;
      justify-content: center;
    }
    #history #product_information_area #container {
      width: 650px;
      color: rgb(65, 64, 64);
      padding: 200px 0 120px;
      background-image: url("<?= get_template_directory_uri() ?>/img/history/japan_map.png");
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
    }
    #history #product_information_area #container .head {
      font-size: 36px;
      text-align: center;
      font-family: YuGothic;
      margin-bottom: 52px;
      letter-spacing: 3px;
    }
    #history #product_information_area #container .sentence {
      text-align: center;
      line-height: 30px;
      margin-bottom: 68px;
    }
    #history #product_information_area #container .btn_area {
      display: flex;
      justify-content: center;
    }
    #history #product_information_area #container .btn_area .btn {
      background: #c9e4e9;
      width: 220px;
      text-align: center;
      padding: 16px 0;
      border-radius: 15%/50%;
      border: solid 1px #a39883;
      font-weight: bold;
    }
    @media (max-width: 800px) {
      #history #product_information_area {
        padding: 40px 0;
      }
      #history #product_information_area #container {
        width: 88%;
        padding: 40px 0 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      #history #product_information_area #container .head {
        font-size: 21px;
        margin-bottom: 24px;
        letter-spacing: 0;
      }
      #history #product_information_area #container .sentence {
        font-size: 14px;
        width: 86%;
        text-align: center;
        margin-bottom: 26px;
      }
      #history #product_information_area #container .sentence br {
        display: none;
      }
      #history #product_information_area #container .btn_area .btn {
        font-size: 14px;
        padding: 12px 0;
        width: 170px;
      }
    }
  </style>
  <div id="product_information_area">
    <div id="container">
      <div class="head">Made In Japanへのこだわりと挑戦</div>
      <div class="sentence">
        私たちは世界一の日本ブランドを目指して、<br />世界中のお客様の笑顔のために、<br />日本の工場で製造・検品を丁寧に行っています。<br />安心・安全にこだわった<br />私たちが自信を持ってお届けする製品をお試しください。
      </div>
      <div class="btn_area"><a href="<?= home_url(); ?>/product" class="btn">kenyaの製品情報</a></div>
    </div>
  </div>

  <style>
    #history #aim_area {
      display: flex;
      justify-content: center;
      padding: 128px 0 155px;
      background-image: url("<?= get_template_directory_uri() ?>/img/history/aim.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
    #history #aim_area #container {
      width: 660px;
    }
    #history #aim_area #container .head {
      font-size: 35px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 42px;
      color: white;
      letter-spacing: 1px;
    }
    #history #aim_area #container .sentence {
      color: white;
      text-align: center;
      font-size: 15px;
      font-weight: bold;
      letter-spacing: 1px;
      line-height: 1.8;
      margin-bottom: 80px;
    }
    #history #aim_area #container .btn_area {
      display: flex;
      justify-content: center;
    }
    #history #aim_area #container .btn_area .btn {
      background: #c9e4e9;
      width: 210px;
      text-align: center;
      padding: 16px 0;
      border-radius: 15%/50%;
      font-weight: bold;
    }
    @media (max-width: 800px) {
      #history #aim_area {
        padding: 80px 0 50px;
      }
      #history #aim_area #container {
        width: 86%;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      #history #aim_area #container .head {
        font-size: 20px;
        font-weight: normal;
        margin-bottom: 20px;
      }
      #history #aim_area #container .sentence {
        font-size: 12px;
        font-weight: normal;
        width: 88%;
        letter-spacing: 0;
        margin-bottom: 40px;
      }
      #history #aim_area #container .sentence br {
        display: none;
      }
      #history #aim_area #container .btn_area .btn {
        font-size: 14px;
        padding: 12px 0;
        width: 170px;
      }
    }
  </style>
  <div id="aim_area">
    <div id="container">
      <div class="head">やさしいあふれる豊かな社会をめざして</div>
      <div class="sentence">
        kenyaサプリメントの描く未来は、やさしい”笑顔”あふれる豊かな社会。<br />創業以来の思いと技術の蓄積を生かし、挑戦心をもって、<br />「ペット」を通じて皆様に求められる企業を目指します。
      </div>
      <div class="btn_area"><a href="<?= home_url(); ?>/product" class="btn">kenyaの製品情報</a></div>
    </div>
  </div>

  <style>
    #history #contact_area {
      background: #e9f4f6;
      display: flex;
      justify-content: center;
      padding: 60px 12px;
    }
    #history #contact_area #container {
      width: 632px;
    }
    #history #contact_area #container .head {
      font-size: 36px;
      text-align: center;
      margin-bottom: 40px;
    }
    #history #contact_area #container .sentence {
      text-align: center;
      margin-bottom: 40px;
    }
    #history #contact_area #container .address {
      font-weight: bold;
      font-size: 22px;
      text-align: center;
      margin-bottom: 32px;
    }
    #history #contact_area #container .btn_area {
      display: flex;
      justify-content: center;
    }
    #history #contact_area #container .btn_area .btn {
      background: #c9e4e9;
      border: solid 1px #a39883;
      width: 210px;
      text-align: center;
      padding: 16px 0;
      border-radius: 15%/50%;
      border: solid 1px gray;
      font-weight: bold;
    }
    @media (max-width: 800px) {
      #history #contact_area #container .head {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 28px;
      }
      #history #contact_area #container .sentence {
        font-size: 14px;
        margin-bottom: 28px;
      }
      #history #contact_area #container .btn_area .btn {
        padding: 8px 0;
        width: 180px;
        font-size: 14px;
        font-weight: normal;
        border-radius: 10%/50%;
      }
    }
  </style>
  <div id="contact_area">
    <div id="container">
      <div class="head">お問い合わせ</div>
      <div class="sentence">
        商品に関するお問い合わせはお問い合わせフォームからご連絡ください。
      </div>
      <div class="btn_area"><a href="<?= home_url(); ?>/contact" class="btn">お問い合わせフォーム</a></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
