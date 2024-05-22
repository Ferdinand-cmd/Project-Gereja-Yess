<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YESS.SUB | Event</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" />
    <style>  
        :root {
        --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
            "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
            "Source Han Sans CN", sans-serif;
        }

        .main-container {
        /* overflow: hidden; */
        overflow: auto;
        }

        .main-container,
        .main-container * {
        box-sizing: border-box;
        }

        input,
        select,
        textarea,
        button {
        outline: 0;
        }

        .main-container {
        position: relative;
        width: 1440px;
        height: 1024px;
        margin: 0 auto;
        }
        .rectangle {
        position: absolute;
        width: 1440px;
        height: 1249px;
        top: 0;
        left: 0;
        background: #ffffff;
        }
        .rectangle-1 {
        position: relative;
        width: 1440px;
        height: 130px;
        margin: -1px 0 0 0;
        background: #000000;
        z-index: 3;
        box-shadow: 0 6px 4px 0 rgba(0, 0, 0, 0.25);
        }
        .logo-putih {
        position: absolute;
        width: 103px;
        height: 40px;
        top: 34px;
        left: 36px;
        background: url(./assets/images/0c1791a4-6f3a-4a22-97b2-8fbfc941be8e.png)
            no-repeat center;
        background-size: cover;
        z-index: 18;
        }
        .button {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        gap: 4px;
        position: absolute;
        width: 139px;
        height: 56px;
        top: 38px;
        left: 1254px;
        padding: 16px 24px 16px 24px;
        cursor: pointer;
        background: transparent;
        border: 1px solid #404040;
        z-index: 11;
        overflow: hidden;
        border-radius: 40px;
        }
        .glow {
        flex-shrink: 0;
        position: absolute;
        top: 68px;
        right: -1px;
        bottom: -104px;
        left: -1px;
        background: #46fff3;
        filter: blur(7.5px);
        z-index: 12;
        border-radius: 60px 60px 0 0;
        }
        .glow-2 {
        flex-shrink: 0;
        position: absolute;
        top: 63px;
        right: -1px;
        bottom: -99px;
        left: -1px;
        background: #1400ff;
        filter: blur(7.5px);
        z-index: 14;
        border-radius: 60px 60px 0 0;
        }
        .continue {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 24px;
        color: #ffffff;
        font-family: Montserrat, var(--default-font-family);
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        white-space: nowrap;
        z-index: 13;
        }
        .right {
        flex-shrink: 0;
        position: relative;
        width: 20px;
        height: 20px;
        z-index: 15;
        overflow: hidden;
        }
        .safearea {
        position: relative;
        width: 16.667px;
        height: 16.667px;
        margin: 1.667px 0 0 1.667px;
        z-index: 16;
        overflow: visible auto;
        }
        .vector {
        position: relative;
        width: 16.5px;
        height: 13.167px;
        margin: 1.75px 0 0 0.08px;
        background: url(./assets/images/dd4ec1a6-f1b8-4ee8-8658-e73c7f5c4a58.png)
            no-repeat center;
        background-size: 100% 100%;
        z-index: 17;
        }
        .kom-sel {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 54px;
        left: 680px;
        color: #f4f4f4;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 500;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 4;
        }
        .event {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 54px;
        left: 946px;
        color: #eeb120;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 800;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 6;
        }
        .pelayanan {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 55px;
        left: 536px;
        color: #f4f4f4;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 500;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 8;
        }
        .bareng {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 55px;
        left: 811px;
        color: #f4f4f4;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 500;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 5;
        }
        .home {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 55px;
        left: 427px;
        color: #f4f4f4;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 500;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 7;
        }
        .best-church {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 77px;
        left: 36px;
        color: #f4f4f4;
        font-family: Montserrat, var(--default-font-family);
        font-size: 15px;
        font-weight: 400;
        line-height: 18.285px;
        text-align: left;
        white-space: nowrap;
        z-index: 9;
        }
        .img {
        position: absolute;
        width: 95.016px;
        height: 3px;
        top: 87px;
        left: 407px;
        background: url(./assets/images/61c9c7c3-d879-4bb3-bb7f-ea6d61019547.png)
            no-repeat center;
        background-size: cover;
        z-index: 10;
        }
        .upcoming-events {
        display: block;
        position: relative;
        height: 150px;
        margin: 27px 0 0 81px;
        color: #000000;
        font-family: Kanit, var(--default-font-family);
        font-size: 100px;
        font-weight: 700;
        line-height: 149.5px;
        text-align: left;
        white-space: nowrap;
        z-index: 19;
        }
        .whats-coming-up {
        position: relative;
        width: 848px;
        height: 50px;
        margin: -7px 0 0 87px;
        font-family: Open Sans Hebrew, var(--default-font-family);
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
        text-align: left;
        text-overflow: initial;
        white-space: nowrap;
        letter-spacing: 1.8px;
        z-index: 20;
        }
        .whats-coming-up-3 {
        position: relative;
        color: #000000;
        font-family: Open Sans Hebrew, var(--default-font-family);
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
        text-align: left;
        letter-spacing: 1.8px;
        }
        .text-a {
        position: relative;
        color: #000000;
        font-family: Open Sans Hebrew, var(--default-font-family);
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
        text-align: left;
        letter-spacing: 3.6px;
        }
        .rectangle-4 {
        position: relative;
        width: 1205px;
        height: 296px;
        margin: 51px 0 0 113px;
        background: #f3f3f3;
        z-index: 21;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
        }
        .n {
        position: absolute;
        width: 340px;
        height: 242px;
        top: 27px;
        left: 49px;
        background: url(./assets/images/99529d84e7724fe0aa9e5539d4c83ecf05e8bd83.png)
            no-repeat center;
        background-size: cover;
        z-index: 24;
        }
        .rectangle-5 {
        position: relative;
        width: 100px;
        height: 60px;
        margin: 182px 0 0 240px;
        font-size: 0px;
        background: rgba(0, 0, 0, 0.25);
        z-index: 27;
        overflow: visible auto;
        }
        .mar {
        display: block;
        position: relative;
        height: 19px;
        margin: 7px 0 0 32px;
        color: #f4f4f4;
        font-family: Roboto, var(--default-font-family);
        font-size: 16px;
        font-weight: 900;
        line-height: 18.75px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: 1.6px;
        z-index: 28;
        }
        .text-c {
        display: block;
        position: relative;
        height: 38px;
        margin: -5px 0 0 31px;
        color: #f4f4f4;
        font-family: Roboto, var(--default-font-family);
        font-size: 32px;
        font-weight: 900;
        line-height: 37.5px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: 3.2px;
        z-index: 29;
        }
        .flex-column-bc {
        position: absolute;
        width: 747px;
        height: 210px;
        top: 42px;
        left: 430px;
        font-size: 0px;
        z-index: 26;
        }
        .putus-atau-terus {
        display: block;
        position: relative;
        height: 54px;
        margin: 0 0 0 0;
        color: #000000;
        font-family: Kanit, var(--default-font-family);
        font-size: 36px;
        font-weight: 600;
        line-height: 53.82px;
        text-align: left;
        white-space: nowrap;
        z-index: 23;
        }
        .ciputra-world-mall {
        display: block;
        position: relative;
        height: 23px;
        margin: 4px 0 0 0;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 20px;
        font-weight: 700;
        line-height: 23px;
        text-align: left;
        white-space: nowrap;
        z-index: 25;
        }
        .yess-surabaya-valentines-day {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: relative;
        width: 572px;
        height: 97px;
        margin: 32px 0 0 0;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 20px;
        font-weight: 400;
        line-height: 23.438px;
        text-align: left;
        letter-spacing: 0.4px;
        z-index: 26;
        }
        .rectangle-6 {
        position: relative;
        width: 1205px;
        height: 296px;
        margin: 44px 0 0 113px;
        background: #f3f3f3;
        z-index: 31;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
        }
        .img-3 {
        position: absolute;
        width: 340px;
        height: 242px;
        top: 27px;
        left: 49px;
        background: url(./assets/images/91488b59-a008-433a-bfa3-7b16f3389423.png)
            no-repeat center;
        background-size: cover;
        z-index: 39;
        }
        .rectangle-7 {
        position: relative;
        width: 100px;
        height: 60px;
        margin: 182px 0 0 240px;
        font-size: 0px;
        background: rgba(0, 0, 0, 0.25);
        z-index: 43;
        overflow: visible auto;
        }
        .apr {
        display: block;
        position: relative;
        height: 19px;
        margin: 7px 0 0 32px;
        color: #f4f4f4;
        font-family: Roboto, var(--default-font-family);
        font-size: 16px;
        font-weight: 900;
        line-height: 18.75px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: 1.6px;
        z-index: 44;
        }
        .apr-date {
        display: block;
        position: relative;
        height: 38px;
        margin: -5px 0 0 6px;
        color: #f4f4f4;
        font-family: Roboto, var(--default-font-family);
        font-size: 32px;
        font-weight: 900;
        line-height: 37.5px;
        text-align: left;
        white-space: nowrap;
        z-index: 45;
        }
        .flex-column-e {
        position: absolute;
        width: 747px;
        height: 227px;
        top: 43px;
        left: 430px;
        font-size: 0px;
        z-index: 46;
        }
        .ylmt-title {
        display: block;
        position: relative;
        height: 54px;
        margin: 0 0 0 0;
        color: #000000;
        font-family: Kanit, var(--default-font-family);
        font-size: 36px;
        font-weight: 600;
        line-height: 53.82px;
        text-align: left;
        white-space: nowrap;
        z-index: 46;
        }
        .ylmt-location-date {
        display: block;
        position: relative;
        height: 23px;
        margin: 3px 0 0 0;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 20px;
        font-weight: 700;
        line-height: 23px;
        text-align: left;
        white-space: nowrap;
        z-index: 41;
        }
        .ylmt-message {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        width: 572px;
        height: 79px;
        top: 112px;
        left: 0;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 20px;
        font-weight: 400;
        line-height: 23.438px;
        text-align: left;
        text-overflow: initial;
        letter-spacing: 0.4px;
        z-index: 42;
        overflow: hidden;
        }
        .button-8 {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: nowrap;
        gap: 8px;
        position: absolute;
        width: 130px;
        height: 56px;
        top: 171px;
        left: 617px;
        padding: 16px 24px 16px 24px;
        z-index: 32;
        border-radius: 40px;
        }
        .button-background {
        flex-shrink: 0;
        position: absolute;
        width: 134px;
        height: 56px;
        top: 50%;
        left: 50%;
        cursor: pointer;
        background: #eeb120;
        border: none;
        transform: translate(-50%, -50%);
        z-index: 34;
        border-radius: 40px;
        }
        .button-shadow {
        flex-shrink: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #6b46ff;
        z-index: 33;
        border-radius: 40px;
        }
        .button-text {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 24px;
        color: #ffffff;
        font-family: DM Sans, var(--default-font-family);
        font-size: 18px;
        font-weight: 500;
        line-height: 24px;
        text-align: left;
        white-space: nowrap;
        z-index: 35;
        }
        .right-9 {
        flex-shrink: 0;
        position: relative;
        width: 20px;
        height: 20px;
        z-index: 36;
        overflow: hidden;
        }
        .safe-area {
        position: relative;
        width: 16.667px;
        height: 16.667px;
        margin: 1.667px 0 0 1.667px;
        z-index: 37;
        overflow: visible auto;
        }
        .vector-a {
        position: relative;
        width: 16.5px;
        height: 13.167px;
        margin: 1.75px 0 0 0.08px;
        background: url(./assets/images/70b8ff2f-ef35-4258-af7f-b37ee796edb8.png)
            no-repeat center;
        background-size: 100% 100%;
        z-index: 38;
        }
        .rectangle-b {
        position: relative;
        width: 1440px;
        height: 142px;
        margin: 71px 0 0 0;
        background: #000000;
        z-index: 48;
        border-radius: 40px 40px 0 0;
        }
        .image {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 38px;
        left: 50px;
        background: url(./assets/images/9901ff329f073d0704c58e121a346740de16b8e8.png)
            no-repeat center;
        background-size: cover;
        z-index: 51;
        }
        .image-c {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 38px;
        left: 150px;
        background: url(./assets/images/73aef9e0ed5ef1ed108a123e9a54cf2e52e4a4d9.png)
            no-repeat center;
        background-size: cover;
        z-index: 52;
        }
        .image-d {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 38px;
        left: 250px;
        background: url(./assets/images/76f9b2354c0e31cc1f2dea6fc755bc26d8c1bc54.png)
            no-repeat center;
        background-size: cover;
        z-index: 53;
        }
        .image-e {
        position: absolute;
        width: 66px;
        height: 66px;
        top: 38px;
        left: 1321px;
        background: url(./assets/images/ddc96dc25eb3a571eb74851b4f9a9f3062acd5b4.png)
            no-repeat center;
        background-size: cover;
        z-index: 49;
        }
        .contact-us {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        width: 243px;
        height: 85px;
        top: 50px;
        left: 1144px;
        color: #ffffff;
        font-family: Roboto, var(--default-font-family);
        font-size: 32px;
        font-weight: 500;
        line-height: 45px;
        text-align: left;
        z-index: 50;
        }
    </style>
  </head>
  <body>
    <div class="main-container">
      <div class="rectangle">
        <div class="rectangle-1">
          <div class="logo-putih"></div>
          <button class="button">
            <div class="glow"></div>
            <div class="glow-2"></div>
            <span class="continue">LOGIN </span>
            <div class="right">
              <div class="safearea"><div class="vector"></div></div>
            </div></button
          ><span class="kom-sel">KomSel</span><span class="event">Event</span
          ><span class="pelayanan">Pelayanan</span
          ><span class="bareng">Bareng</span><span class="home">Home</span
          ><span class="best-church">BEST CHURCH</span>
          <div class="img"></div>
        </div>
        <span class="upcoming-events">Upcoming Events</span>
        <div class="whats-coming-up">
          <span class="whats-coming-up-3"
            >What's coming up at YESS Surabaya </span
          ><span class="text-a">>>></span>
        </div>
        <div class="rectangle-4">
          <div class="n">
            <div class="rectangle-5">
              <span class="mar">MAR</span><span class="text-c">30</span>
            </div>
          </div>
          <div class="flex-column-bc">
            <span class="putus-atau-terus">Putus atau Terus</span
            ><span class="ciputra-world-mall"
              >Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</span
            ><span class="yess-surabaya-valentines-day"
              >YESS Surabaya Valentine's Day Celebration “Putus atau Terus”<br />Ini
              adalah kesempatan untuk terinspirasi sebagai pasangan! juga
              merupakan PENGALAMAN YANG HEBAT bagi kamu ya...</span
            >
          </div>
        </div>
        <div class="rectangle-6">
          <div class="img-3">
            <div class="rectangle-7">
              <span class="apr">APR</span><span class="apr-date">19-21</span>
            </div>
          </div>
          <div class="flex-column-e">
            <span class="ylmt-title">YESS Leardership Mission Training VII</span
            ><span class="ylmt-location-date"
              >Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</span
            ><span class="ylmt-message"
              >Biarlah semangat misi terus menyala dalam hidup kita.<br />Uis
              Neno nokan kit, Immanuel!<br />Sampe ketemu di YLMT, basodara
              dong!</span
            >
            <div class="button-8">
              <button class="button-background"></button>
              <div class="button-shadow"></div>
              <span class="button-text">Daftar</span>
              <div class="right-9">
                <div class="safe-area"><div class="vector-a"></div></div>
              </div>
            </div>
          </div>
        </div>
        <div class="rectangle-b">
          <div class="image"></div>
          <div class="image-c"></div>
          <div class="image-d"></div>
          <div class="image-e"></div>
          <span class="contact-us">Contact Us</span>
        </div>
      </div>
    </div>
  </body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generated by Codia AI</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div class="main-container">
      <span class="apr">APR</span>
      <div class="rectangle">
        <span class="pendaftaran-event">PENDAFTARAN EVENT</span
        ><span class="bagi-jemaat"
          >Bagi jemaat yang ingin mendaftar dalam event YESS Surabaya silahkan
          mengisi form pendaftaran event dibawah ini.</span
        >
        <div class="rectangle-1">
          <span class="yess-leadership-mission"
            >YESS Leardership Mission Training VII</span
          ><span class="desa-birkium-soe"
            >Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</span
          >
        </div>
        <div class="rectangle-2">
          <span class="alergi-anda"
            >Alergi anda (jika tidak punya isi “-”)</span
          >
          <div class="rectangle-3"></div>
          <span class="informasi-keluarga"
            >Informasi keluarga yang dapat dihubungi</span
          ><span class="active-contact"
            >* sertakan nama dan nomor telepon aktif</span
          >
          <div class="rectangle-4"></div>
          <span class="spiritual-circle"
            >Cari circle rohani yang sehat dan bikin semangat?</span
          >
        </div>
        <div class="hover-interaction">
          <div class="frame"><div class="frame-5"></div></div>
          <span class="yuk-sini-merapat">YUK SINI MERAPAT!</span>
        </div>
        <div class="rectangle-6">
          <div class="rectangle-7"><span class="cancel">CANCEL</span></div>
          <div class="button">
            <div class="background"></div>
            <div class="shadow"></div>
            <span class="button-8">SUBMIT</span>
          </div>
        </div>
      </div>
      <div class="line"></div>
      <div class="line-9"></div>
      <div class="empty"></div>
    </div>
  </body>
</html> -->

<!-- :root {
  --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
    "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
    "Source Han Sans CN", sans-serif;
}

.main-container {
  overflow: hidden;
}

.main-container,
.main-container * {
  box-sizing: border-box;
}

input,
select,
textarea,
button {
  outline: 0;
}

.main-container {
  position: relative;
  width: 982px;
  height: 850px;
  margin: 0 auto;
  font-size: 0px;
  overflow: hidden auto;
}
.apr {
  display: block;
  position: relative;
  height: 18.615px;
  margin: 409.493px 0 0 -20.631px;
  color: #f4f4f4;
  font-family: Roboto, var(--default-font-family);
  font-size: 16px;
  font-weight: 900;
  line-height: 18.615px;
  text-align: left;
  white-space: nowrap;
  letter-spacing: 1.6px;
  z-index: 8;
}
.rectangle {
  position: absolute;
  width: 982px;
  height: 1113px;
  top: 0;
  left: 0;
  font-size: 0px;
  background: #fdfdfd;
}
.pendaftaran-event {
  display: block;
  position: relative;
  height: 40px;
  margin: 25px 0 0 60px;
  color: #000000;
  font-family: Montserrat, var(--default-font-family);
  font-size: 24px;
  font-weight: 500;
  line-height: 40px;
  text-align: left;
  white-space: nowrap;
  z-index: 4;
}
.bagi-jemaat {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  width: 699px;
  height: 80px;
  margin: 35px 0 0 60px;
  color: #000000;
  font-family: Montserrat, var(--default-font-family);
  font-size: 20px;
  font-weight: 400;
  line-height: 40px;
  text-align: left;
  z-index: 3;
}
.rectangle-1 {
  position: relative;
  width: 982px;
  height: 135px;
  margin: 26px 0 0 0;
  font-size: 0px;
  background: #f3f3f3;
  z-index: 6;
  overflow: visible auto;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
}
.yess-leadership-mission {
  display: block;
  position: relative;
  height: 52.905px;
  margin: 21px 0 0 93.034px;
  color: #000000;
  font-family: Kanit, var(--default-font-family);
  font-size: 36px;
  font-weight: 600;
  line-height: 52.905px;
  text-align: left;
  white-space: nowrap;
  z-index: 9;
}
.desa-birkium-soe {
  display: block;
  position: relative;
  height: 22.534px;
  margin: 2.939px 0 0 93.034px;
  color: #646464;
  font-family: Roboto, var(--default-font-family);
  font-size: 20px;
  font-weight: 700;
  line-height: 22.534px;
  text-align: left;
  white-space: nowrap;
  z-index: 7;
}
.rectangle-2 {
  position: relative;
  width: 982px;
  height: 602px;
  margin: 0 0 0 0;
  font-size: 0px;
  background: #f1f1f1;
  z-index: 1;
  overflow: visible auto;
}
.alergi-anda {
  display: block;
  position: relative;
  height: 40px;
  margin: 33px 0 0 60px;
  color: #000000;
  font-family: Montserrat, var(--default-font-family);
  font-size: 24px;
  font-weight: 500;
  line-height: 40px;
  text-align: left;
  white-space: nowrap;
  z-index: 15;
}
.rectangle-3 {
  position: relative;
  width: 861px;
  height: 117px;
  margin: 10px 0 0 61px;
  background: #ffffff;
  border: 1px solid #000000;
  z-index: 11;
}
.informasi-keluarga {
  display: block;
  position: relative;
  height: 40px;
  margin: 20px 0 0 60px;
  color: #000000;
  font-family: Montserrat, var(--default-font-family);
  font-size: 24px;
  font-weight: 500;
  line-height: 40px;
  text-align: left;
  white-space: nowrap;
  z-index: 13;
}
.active-contact {
  display: block;
  position: relative;
  height: 40px;
  margin: -4px 0 0 61px;
  color: #6d6d6d;
  font-family: Montserrat, var(--default-font-family);
  font-size: 20px;
  font-weight: 500;
  line-height: 40px;
  text-align: left;
  white-space: nowrap;
  z-index: 14;
}
.rectangle-4 {
  position: relative;
  width: 861px;
  height: 117px;
  margin: 10px 0 0 61px;
  background: #ffffff;
  border: 1px solid #000000;
  z-index: 12;
}
.spiritual-circle {
  display: flex;
  align-items: flex-end;
  justify-content: center;
  position: relative;
  width: 821px;
  height: 40px;
  margin: 117px 0 0 81px;
  color: #ffffff;
  font-family: Roboto Serif, var(--default-font-family);
  font-size: 32px;
  font-weight: 700;
  line-height: 40px;
  text-align: center;
  white-space: nowrap;
  z-index: 10;
}
.hover-interaction {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;
  gap: 6.663px;
  position: relative;
  width: 206.978px;
  height: 33.315px;
  margin: -5px 0 0 388px;
  z-index: 16;
  overflow: hidden;
  border-radius: 99.946px;
}
.frame {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;
  flex-shrink: 0;
  gap: 11.105px;
  position: relative;
  width: 33.315px;
  height: 33.315px;
  background: #eeb120;
  z-index: 17;
  border-radius: 99.946px;
}
.frame-5 {
  flex-shrink: 0;
  position: relative;
  width: 10.365px;
  height: 17.768px;
  background: url(./assets/images/91865588-e8da-40c5-bc8d-03665cd66b79.png)
    no-repeat center;
  background-size: cover;
  z-index: 18;
}
.yuk-sini-merapat {
  flex-shrink: 0;
  flex-basis: auto;
  position: relative;
  height: 18px;
  color: #ffffff;
  font-family: Inter, var(--default-font-family);
  font-size: 15.000000953674316px;
  font-weight: 500;
  line-height: 18px;
  text-align: left;
  text-transform: uppercase;
  white-space: nowrap;
  letter-spacing: 1.5px;
  z-index: 19;
}
.rectangle-6 {
  position: relative;
  width: 982px;
  height: 99px;
  margin: 42.685px 0 0 0;
  background: #a1a1a1;
  z-index: 21;
}
.rectangle-7 {
  position: absolute;
  width: 143px;
  height: 56px;
  top: 22px;
  left: 616px;
  background: #e5e5e5;
  border: 1px solid #000000;
  z-index: 26;
}
.cancel {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: absolute;
  height: 24px;
  top: 15px;
  left: 26px;
  color: #000000;
  font-family: DM Sans, var(--default-font-family);
  font-size: 20px;
  font-weight: 700;
  line-height: 24px;
  text-align: left;
  white-space: nowrap;
  letter-spacing: 1.6px;
  z-index: 27;
}
.button {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;
  gap: 8px;
  position: absolute;
  width: 131px;
  height: 56px;
  top: 22px;
  left: 802px;
  padding: 16px 24px 16px 24px;
  z-index: 22;
  border-radius: 40px;
}
.background {
  flex-shrink: 0;
  position: absolute;
  width: 134px;
  height: 56px;
  top: 50%;
  left: 50%;
  background: #000000;
  transform: translate(-49.63%, -50%);
  z-index: 24;
}
.shadow {
  flex-shrink: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #000000;
  z-index: 23;
}
.button-8 {
  flex-shrink: 0;
  flex-basis: auto;
  position: relative;
  height: 24px;
  color: #ffffff;
  font-family: DM Sans, var(--default-font-family);
  font-size: 20px;
  font-weight: 700;
  line-height: 24px;
  text-align: left;
  white-space: nowrap;
  letter-spacing: 2px;
  z-index: 25;
}
.line {
  position: absolute;
  width: 982px;
  height: 1px;
  top: 82px;
  left: 0;
  background: url(./assets/images/a4885a4f-dcf3-43dc-8977-f4c5132d101d.png)
    no-repeat center;
  background-size: cover;
  z-index: 28;
}
.line-9 {
  position: absolute;
  width: 982px;
  height: 1px;
  top: 205px;
  left: 0;
  background: url(./assets/images/dc121b1b-b141-43a6-85a8-305e87f327ee.png)
    no-repeat center;
  background-size: cover;
  z-index: 5;
}
.empty {
  position: absolute;
  width: 982px;
  height: 207px;
  top: 816px;
  left: 0;
  background: url(./assets/images/da338b0d-3a55-4aaf-bb6f-cbbe41d4fc0f.png)
    no-repeat center;
  background-size: cover;
  z-index: 2;
} -->
