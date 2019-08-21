<?php get_header(); ?>

<style>
  #about {
    color: #485254;
  }
</style>
<main id="about">
  <style>
    #about #what_kenya {
      background: #dbedf0;
      display: flex;
      justify-content: center;
      padding: 120px 0 0;
      overflow: hidden;
    }
    #about #what_kenya #container {
      position: relative;
      width: 660px;
      text-align: center;
    }
    #about #what_kenya div[class^="box"] {
      background-color: #b6dbe2;
      position: absolute;
    }
    #about #what_kenya .box1 {
      width: 200px;
      height: 120px;
      top: -30px;
      left: -180px;
    }
    #about #what_kenya .box2 {
      width: 80px;
      height: 80px;
      top: 300px;
      left: -220px;
    }
    #about #what_kenya .box3 {
      width: 180px;
      height: 100px;
      top: 470px;
      left: -280px;
    }
    #about #what_kenya .box4 {
      width: 220px;
      height: 80px;
      top: -90px;
      right: -300px;
    }
    #about #what_kenya .box5 {
      width: 200px;
      height: 120px;
      top: 200px;
      right: -130px;
    }
    #about #what_kenya .box6 {
      width: 120px;
      height: 120px;
      top: 580px;
      right: -220px;
    }
    #about #what_kenya #container .head {
      font-size: 46px;
      letter-spacing: 2px;
      margin: 0 0 34px;
      position: relative;
    }
    #about #what_kenya #container .secondary_head {
      font-size: 36px;
      line-height: 58px;
      margin: 0 0 44px;
      position: relative;
    }
    #about #what_kenya #container .sentence {
      line-height: 30px;
      margin: 0 0 80px;
      position: relative;
    }
    #about #what_kenya #container img {
      position: relative;
      padding-right: 80px;
    }

    @media (max-width: 800px) {
      #about #what_kenya {
        padding: 130px 0 0;
      }
      #about #what_kenya #container {
        width: 73%;
      }
      #about #what_kenya .box1 {
        width: 140px;
        height: 60px;
        top: -90px;
        left: -80px;
      }
      #about #what_kenya .box2 {
        width: 50px;
        height: 50px;
        top: 30px;
        left: -50px;
      }
      #about #what_kenya .box3 {
        width: 160px;
        height: 80px;
        top: 340px;
        left: -120px;
      }
      #about #what_kenya .box4 {
        width: 120px;
        height: 60px;
        top: -20px;
        right: -70px;
      }
      #about #what_kenya .box5 {
        width: 200px;
        height: 80px;
        top: 180px;
        right: -190px;
      }
      #about #what_kenya .box6 {
        width: 100px;
        height: 100px;
        top: 580px;
        right: -80px;
      }
      #about #what_kenya #container .head {
        font-size: 19px;
        font-weight: bold;
        letter-spacing: 1px;
        margin: 0 0 24px;
      }
      #about #what_kenya #container .secondary_head {
        font-size: 16px;
        line-height: 24px;
        margin: 0 0 56px;
      }
      #about #what_kenya #container .sentence {
        font-size: 14px;
        margin: 0 0 40px;
      }
    }

    @media (max-width: 320px) {
      #about #what_kenya br {
        display: none;
      }
      #about #what_kenya #container .head {
        font-size: 16px;
      }
    }
  </style>
  <section id="what_kenya">
    <div id="container">
      <div class="box1"></div>
      <div class="box2"></div>
      <div class="box3"></div>
      <div class="box4"></div>
      <div class="box5"></div>
      <div class="box6"></div>

      <div class="head">
        Kenyaのサプリメントとは？
      </div>
      <div class="secondary_head">
        けんやサプリメントとは<br />
        なにのなになにのことです。
      </div>
      <div class="sentence">
        大地堂の「パン酵母ベータグルカン85」は、キノコ系サプリメントのような強い臭いや独特の味はございませんので、ペットのお食事に混ぜたり、水やミルクに混ぜて与えることも可能です。
        <br />
        <br />
        嗅覚の鋭い愛犬にも問題なくご利用いただいております。体重比の摂取量を考えますと、ペットに安価にたくさんの量を服用でき、メガビタミン摂取法を容易に実行できますので、多くの方々にお喜びいただいております。
        <br />
        <br />
        パン酵母の細胞壁から化学的に抽出される物質ですから、小麦アレルギーとは何の関係もございません。ご安心ください。
      </div>
      <img src="<?= get_template_directory_uri() ?>/img/about/finger.png" />
    </div>
  </section>

  <style>
    #about #result {
      display: flex;
      justify-content: center;
      padding: 74px 0 60px;
    }
    #about #result #container {
      width: 720px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    #about #result #container .head {
      font-size: 48px;
      text-align: center;
      margin: 0 0 46px;
    }
    #about #result #container .sentence {
      text-align: center;
      line-height: 30px;
      padding: 0 0 42px;
      margin: 0 0 40px;
      border-bottom: 2px solid #c9e4e9;
    }
    #about #result #container .history {
      margin: 0 80px 40px 0;
      line-height: 30px;
    }
    #about #result #container .img_area {
      width: 76%;
    }

    @media (max-width: 800px) {
      #about #result {
        padding: 64px 0 52px;
      }
      #about #result #container {
        width: 77%;
      }
      #about #result #container .head {
        font-size: 19px;
        font-weight: bold;
        letter-spacing: 1px;
        margin: 0 0 40px;
      }
      #about #result #container .sentence {
        width: 90%;
        letter-spacing: 0.7px;
        padding: 0 0 28px;
        margin: 0 0 26px;
      }
      #about #result #container .sentence .none {
        display: none;
      }
      #about #result #container .history {
        font-size: 14px;
        width: 98%;
        margin: 0 0 12px;
        line-height: 24px;
      }
      #about #result #container .img_area {
        width: 94%;
      }
    }
  </style>
  <section id="result">
    <div id="container">
      <div class="head">
        Kenyaのサプリメントの研究結果
      </div>
      <div class="sentence">
        大地堂の「パン酵母ベータグルカン85」は、<br class="none" />
        キノコ系サプリメントのような強い臭いや独特の味はございませんので、ペットのお食事に<br
          class="none"
        />
        混ぜたり、<br class="none" />
        水やミルクに混ぜて与えることも可能です。
      </div>
      <div class="history">
        1953年 :　中央研究室を開設<br />
        1971年 :　日本で初めてビフィズス菌を乳製品に利用することに成功<br />
        1986年 :　世界で初めてラクトフェリンを配合した育児用ミルクを開発<br />
        〈受賞歴〉<br />
        1984年 :　乳製品へのビフィズス菌利用の研究で科学技術庁長官賞を受賞<br />
        1993年 :　ラクチュロースの製造法の開発で科学技術庁長官賞を受賞<br />
        2003年 :　ラクトフェリンの工業的な製造法の開発で文部科学大臣賞を受賞<br />
        2010年 :　ペプチドの研究開発で科学技術賞を受賞<br />
        2013年
        :　高菌数、高生残性ビフィズス菌含有ヨーグルト製造方法の技術開発で<br />
        日本農芸化学会農芸化学技術賞を受賞
      </div>
      <div class="img_area">
        <img
          src="<?= get_template_directory_uri(); ?>/img/information_center.png"
        />
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
