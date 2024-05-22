<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YESS.SUB | Event Detail</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" />
    <style>
        :root {
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
        width: 1440px;
        height: 1024px;
        margin: 0 auto;
        overflow: hidden auto;
        }
        .rectangle {
        position: absolute;
        width: 1440px;
        height: 2119px;
        top: 0;
        left: 0;
        background: #f4f4f4;
        }
        .rectangle-1 {
        position: relative;
        width: 1440px;
        height: 130px;
        margin: 0 0 0 0;
        background: #000000;
        z-index: 4;
        box-shadow: 0 6px 4px 0 rgba(0, 0, 0, 0.25);
        }
        .logo-putih {
        position: absolute;
        width: 103px;
        height: 40px;
        top: 34px;
        left: 36px;
        background: url(./assets/images/ba1b8b2f-d581-4939-9b62-ac1d3a2c785c.png)
            no-repeat center;
        background-size: cover;
        z-index: 19;
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
        z-index: 12;
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
        z-index: 13;
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
        z-index: 15;
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
        z-index: 14;
        }
        .right {
        flex-shrink: 0;
        position: relative;
        width: 20px;
        height: 20px;
        z-index: 16;
        overflow: hidden;
        }
        .safe-area {
        position: relative;
        width: 16.667px;
        height: 16.667px;
        margin: 1.667px 0 0 1.667px;
        z-index: 17;
        overflow: visible auto;
        }
        .vector {
        position: relative;
        width: 16.5px;
        height: 13.167px;
        margin: 1.75px 0 0 0.08px;
        background: url(./assets/images/83f1a00a-d446-4910-952f-c161bb84bd2a.png)
            no-repeat center;
        background-size: 100% 100%;
        z-index: 18;
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
        z-index: 5;
        }
        .event {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 54px;
        left: 946px;
        color: #f4f4f4;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 500;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 7;
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
        z-index: 9;
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
        z-index: 6;
        }
        .home {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 55px;
        left: 427px;
        color: #eeb120;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 800;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 8;
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
        z-index: 10;
        }
        .line {
        position: absolute;
        width: 95.016px;
        height: 3px;
        top: 87px;
        left: 407px;
        background: url(./assets/images/16d27788-e1a3-44f5-8db1-a0f332ab1a86.png)
            no-repeat center;
        background-size: cover;
        z-index: 11;
        }
        .rectangle-3 {
        position: relative;
        width: 1337px;
        height: 1733px;
        margin: 35px 0 0 50px;
        background: #ffffff;
        z-index: 1;
        overflow: visible auto;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
        }
        .button-4 {
        position: relative;
        width: 243px;
        height: 70px;
        margin: 27px 0 0 80px;
        cursor: pointer;
        background: #e3e3e3;
        border: none;
        z-index: 21;
        border-radius: 35px;
        }
        .kembali-events {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 22px;
        top: 24px;
        left: 52px;
        color: #000000;
        font-family: Montserrat, var(--default-font-family);
        font-size: 18px;
        font-weight: 600;
        line-height: 21.942px;
        text-align: left;
        white-space: nowrap;
        z-index: 21;
        }
        .empty {
        position: relative;
        width: 1169px;
        height: 1169px;
        margin: 20px 0 0 83px;
        background: url(./assets/images/405b79a68a003c32aab00353cd2b98feedf55647.png)
            no-repeat center;
        background-size: cover;
        z-index: 29;
        }
        .arrow-back {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 24px;
        height: 24px;
        top: 264px;
        left: 19px;
        color: #000000;
        font-family: Material Icons, var(--default-font-family);
        font-size: 24px;
        font-weight: 400;
        line-height: 24px;
        text-align: center;
        white-space: nowrap;
        z-index: 29;
        }
        .flex-row-e {
        position: relative;
        width: 1207px;
        height: 86px;
        margin: 42px 0 0 83px;
        z-index: 47;
        }
        .yess-leardership-mission {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: absolute;
        height: 72px;
        top: 0;
        left: 0;
        color: #000000;
        font-family: Kanit, var(--default-font-family);
        font-size: 48px;
        font-weight: 600;
        line-height: 71.76px;
        text-align: left;
        white-space: nowrap;
        z-index: 47;
        }
        .button-5 {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: nowrap;
        gap: 8px;
        position: absolute;
        width: 200px;
        height: 86px;
        top: 0;
        left: 1007px;
        padding: 16px 24px 16px 24px;
        z-index: 40;
        border-radius: 40px;
        }
        .shadow {
        flex-shrink: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #6b46ff;
        z-index: 41;
        border-radius: 40px;
        }
        .background {
        flex-shrink: 0;
        position: absolute;
        width: 134px;
        height: 56px;
        top: 50%;
        left: 50%;
        background: #eeb120;
        transform: translate(-50%, -50%);
        z-index: 42;
        border-radius: 40px;
        }
        .span-button {
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
        z-index: 43;
        }
        .right-6 {
        flex-shrink: 0;
        position: relative;
        width: 20px;
        height: 20px;
        z-index: 44;
        overflow: hidden;
        }
        .safearea {
        position: relative;
        width: 16.667px;
        height: 16.667px;
        margin: 1.667px 0 0 1.667px;
        z-index: 45;
        overflow: visible auto;
        }
        .vector-7 {
        position: relative;
        width: 16.5px;
        height: 13.167px;
        margin: 1.75px 0 0 0.08px;
        background: url(./assets/images/85a92397-7ecc-468d-9456-0d39f2197773.png)
            no-repeat center;
        background-size: 100% 100%;
        z-index: 46;
        }
        .flex-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        width: 271px;
        height: 36px;
        margin: 20px 0 0 83px;
        z-index: 37;
        }
        .span-date-range {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        position: relative;
        width: 36px;
        height: 36px;
        color: #646464;
        font-family: Material Icons, var(--default-font-family);
        font-size: 36px;
        font-weight: 400;
        line-height: 36px;
        text-align: center;
        white-space: nowrap;
        z-index: 37;
        }
        .span-april {
        flex-shrink: 0;
        position: relative;
        height: 35px;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 30px;
        font-weight: 500;
        line-height: 35px;
        text-align: left;
        white-space: nowrap;
        z-index: 35;
        }
        .flex-row-a {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        width: 583px;
        height: 36px;
        margin: 11px 0 0 83px;
        z-index: 38;
        }
        .location-on {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        position: relative;
        width: 36px;
        height: 36px;
        color: #646464;
        font-family: Material Icons, var(--default-font-family);
        font-size: 36px;
        font-weight: 400;
        line-height: 36px;
        text-align: center;
        white-space: nowrap;
        z-index: 38;
        }
        .desa-bikium-soe {
        flex-shrink: 0;
        position: relative;
        height: 35px;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 30px;
        font-weight: 500;
        line-height: 35px;
        text-align: left;
        white-space: nowrap;
        z-index: 36;
        }
        .semangat-misi-terus {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        position: relative;
        width: 747px;
        height: 94px;
        margin: 47px 0 0 83px;
        color: #646464;
        font-family: Roboto, var(--default-font-family);
        font-size: 24px;
        font-weight: 400;
        line-height: 28.125px;
        text-align: left;
        text-overflow: initial;
        letter-spacing: 0.48px;
        z-index: 39;
        overflow: hidden;
        }
        .rectangle-8 {
        position: relative;
        width: 1440px;
        height: 142px;
        margin: 79px 0 0 0;
        background: #000000;
        z-index: 23;
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
        z-index: 26;
        }
        .image-9 {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 38px;
        left: 150px;
        background: url(./assets/images/73aef9e0ed5ef1ed108a123e9a54cf2e52e4a4d9.png)
            no-repeat center;
        background-size: cover;
        z-index: 27;
        }
        .image-a {
        position: absolute;
        width: 70px;
        height: 70px;
        top: 38px;
        left: 250px;
        background: url(./assets/images/76f9b2354c0e31cc1f2dea6fc755bc26d8c1bc54.png)
            no-repeat center;
        background-size: cover;
        z-index: 28;
        }
        .image-b {
        position: absolute;
        width: 66px;
        height: 66px;
        top: 38px;
        left: 1321px;
        background: url(./assets/images/ddc96dc25eb3a571eb74851b4f9a9f3062acd5b4.png)
            no-repeat center;
        background-size: cover;
        z-index: 24;
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
        z-index: 25;
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
              <div class="safe-area"><div class="vector"></div></div>
            </div></button
          ><span class="kom-sel">KomSel</span><span class="event">Event</span
          ><span class="pelayanan">Pelayanan</span
          ><span class="bareng">Bareng</span><span class="home">Home</span
          ><span class="best-church">BEST CHURCH</span>
          <div class="line"></div>
        </div>
        <div class="rectangle-3">
          <button class="button-4">
            <span class="kembali-events">Kembali ke events</span>
          </button>
          <div class="empty"><span class="arrow-back">arrow_back</span></div>
          <div class="flex-row-e">
            <span class="yess-leardership-mission"
              >YESS Leardership Mission Training VII</span
            >
            <div class="button-5">
              <div class="shadow"></div>
              <div class="background"></div>
              <span class="span-button">Daftar</span>
              <div class="right-6">
                <div class="safearea"><div class="vector-7"></div></div>
              </div>
            </div>
          </div>
          <div class="flex-row">
            <span class="span-date-range">date_range</span
            ><span class="span-april">19-21 April 2024</span>
          </div>
          <div class="flex-row-a">
            <span class="location-on">location_on</span
            ><span class="desa-bikium-soe"
              >Desa Bikium, Soe, Nusa Tenggara Timur</span
            >
          </div>
          <span class="semangat-misi-terus"
            >Biarlah semangat misi terus menyala dalam hidup kita.<br />Uis Neno
            nokan kit, Immanuel!<br />Sampe ketemu di YLMT, basodara dong!</span
          >
        </div>
        <div class="rectangle-8">
          <div class="image"></div>
          <div class="image-9"></div>
          <div class="image-a"></div>
          <div class="image-b"></div>
          <span class="contact-us">Contact Us</span>
        </div>
      </div>
    </div>
  </body>
</html>
