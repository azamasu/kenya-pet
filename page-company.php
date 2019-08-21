<?php get_header(); ?>

<style>
  #company {
    width: 900px;
    margin: 0 auto;
    color: #485254;
  }
  #company h1 {
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    padding: 60px 0 80px;
  }
  #company h2 {
    font-size: 1.2rem;
    font-weight: bold;
    padding: 0 0 40px;
  }
  #company section {
    margin-bottom: 100px;
  }
  @media (max-width: 1080px) {
    #company {
      width: 700px;
    }
  }
  @media (max-width: 800px) {
    #company {
      width: 90%;
    }
    #company h2 {
      text-align: center;
      padding: 0 0 24px;
    }
  }
</style>
<main id="company">
  <h1>会社情報</h1>

  <style>
    #company .about .container {
      display: flex;
    }
    #company .about dl {
      flex: 1;
    }
    #company .about dl > div {
      display: flex;
    }
    #company .about dt,
    #company .about dd {
      padding: 12px 0;
      line-height: 2;
    }
    #company .about dt {
      width: 160px;
      border-right: 1px solid #b7dbe1;
    }
    #company .about dd {
      flex: 1;
      padding-left: 28px;
    }
    #company .about .image-container {
      width: 400px;
      padding-left: 20px;
    }
    @media (max-width: 1080px) {
      #company .about .image-container {
        width: 280px;
      }
    }
    @media (max-width: 800px) {
      #company .about .container {
        flex-direction: column;
      }
      #company .about dt {
        width: 40%;
      }
      #company .about .image-container {
        width: 100%;
        padding: 28px 0 0;
      }
    }
    @media (max-width: 500px) {
      #company .about dt,
      #company .about dd {
        font-size: .9rem;
      }
    }
  </style>
  <section class="about">
    <h2>概要</h2>
    <div class="container">
      <dl>
        <div>
          <dt>社名</dt>
          <dd>株式会社KENYA</dd>
        </div>
        <div>
          <dt>本社所在地</dt>
          <dd>〒153-0064<br />東京都品川区上大崎2-15-19</dd>
        </div>
        <div>
          <dt>メールアドレス</dt>
          <dd>info@kenya-pet.jp</dd>
        </div>
        <div>
          <dt>設立</dt>
          <dd>2018年4月</dd>
        </div>
        <div>
          <dt>資本金</dt>
          <dd>1,000,000円</dd>
        </div>
        <div>
          <dt>代表取締役</dt>
          <dd>中田けんや</dd>
        </div>
      </dl>

      <div class="image-container">
        <img
          src="<?= get_template_directory_uri() ?>/img/company/building.png"
          alt="company building"
        />
      </div>
    </div>
  </section>

  <style>
    #company .access {
    }
    #company .access .map {
      position: relative;
    }
    #company .access .info-container {
      position: absolute;
      width: 100%;
      bottom: -20px;
      display: flex;
    }
    #company .access .info {
      color: white;
      background: #b7dbe1;
      padding: 20px 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
    }
    #company .access .info img {
      height: 60px;
      width: auto;
      margin-right: 20px;
    }
    @media (max-width: 800px) {
      #company .access .info-container {
        position: relative;
        margin-top: 12px;
        bottom: 0;
      }
      #company .access .info {
        width: 100%;
        padding: 16px 12px;
        font-size: 0.9rem;
      }
      #company .access .info img {
        height: 40px;
        margin-right: 12px;
      }
    }
  </style>
  <section class="access">
    <h2>アクセス</h2>
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.6620252534933!2d139.7068052291935!3d35.63640078872002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b3c9143c4f5%3A0xaf706802d0bb5788!2z44CSMTUzLTAwNjMg5p2x5Lqs6YO955uu6buS5Yy655uu6buS77yS5LiB55uu77yT4oiS77yZIOeUsOmBk-ODnuODs-OCt-ODp-ODsw!5e0!3m2!1sja!2sjp!4v1548300100771"
        width="100%"
        height="450"
        frameborder="0"
        style="border:0"
        allowfullscreen
      ></iframe>
      <div class="info-container">
        <div class="info">
          <img
            src="<?= get_template_directory_uri() ?>/img/company/train.png"
            alt="train icon"
          />
          <p>
            JR目黒駅東口より徒歩1分<br />
            東京メトロ、東急電鉄目黒駅 正面口より徒歩1分
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
