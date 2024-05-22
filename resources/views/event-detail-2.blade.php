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
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei", "Source Han Sans CN", sans-serif;
        }
        body, html {
            margin: 0;
            padding: 0;
            font-family: var(--default-font-family);
        }
        .main-container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            background-color: #f4f4f4;
        }
        .header {
            width: 100%;
            background-color: #000;
            box-shadow: 0 6px 4px 0 rgba(0, 0, 0, 0.25);
            padding: 20px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            width: 103px;
            height: 40px;
            background: url(./assets/images/ba1b8b2f-d581-4939-9b62-ac1d3a2c785c.png) no-repeat center;
            background-size: cover;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-link {
            color: #f4f4f4;
            font-family: Montserrat, var(--default-font-family);
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }
        .nav-link.home {
            color: #eeb120;
            font-weight: 800;
        }
        .login-button {
            position: relative;
            display: flex;
            align-items: center;
            padding: 16px 24px;
            border: 1px solid #404040;
            border-radius: 40px;
            background: transparent;
            cursor: pointer;
            color: #ffffff;
            font-family: Montserrat, var(--default-font-family);
            font-size: 20px;
            font-weight: 700;
            overflow: hidden;
        }
        .login-button .glow, .login-button .glow-2 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150%;
            height: 150%;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            filter: blur(7.5px);
            z-index: -1;
        }
        .login-button .glow {
            background: #46fff3;
        }
        .login-button .glow-2 {
            background: #1400ff;
        }
        .login-button .icon {
            margin-left: 8px;
        }
        .content {
            width: calc(100% - 100px);
            max-width: 1337px;
            background-color: #ffffff;
            margin: 35px auto;
            padding: 35px;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
            border-radius: 10px;
        }
        .back-button {
            display: flex;
            align-items: center;
            padding: 16px 24px;
            background-color: #e3e3e3;
            border: none;
            border-radius: 35px;
            cursor: pointer;
            font-family: Montserrat, var(--default-font-family);
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .event-image {
            width: 100%;
            height: auto;
            max-width: 1169px;
            margin: 20px 0;
            background: url(./assets/images/405b79a68a003c32aab00353cd2b98feedf55647.png) no-repeat center;
            background-size: cover;
        }
        .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .event-title {
            font-family: Kanit, var(--default-font-family);
            font-size: 48px;
            font-weight: 600;
        }
        .register-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background-color: #eeb120;
            border: none;
            border-radius: 40px;
            font-family: DM Sans, var(--default-font-family);
            font-size: 18px;
            font-weight: 500;
            color: #ffffff;
            cursor: pointer;
        }
        .event-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            font-family: Roboto, var(--default-font-family);
            font-size: 30px;
            font-weight: 500;
            color: #646464;
        }
        .event-description {
            font-family: Roboto, var(--default-font-family);
            font-size: 24px;
            font-weight: 400;
            color: #646464;
            line-height: 1.5;
            letter-spacing: 0.48px;
            margin-bottom: 40px;
        }
        .footer {
            width: 100%;
            background-color: #000;
            padding: 40px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 40px 40px 0 0;
        }
        .footer .icon {
            width: 70px;
            height: 70px;
            background-size: cover;
        }
        .footer .contact-us {
            color: #ffffff;
            font-family: Roboto, var(--default-font-family);
            font-size: 32px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <header class="header">
            <div class="logo"></div>
            <nav class="nav-links">
                <a href="#" class="nav-link home">Home</a>
                <a href="#" class="nav-link">Pelayanan</a>
                <a href="#" class="nav-link">KomSel</a>
                <a href="#" class="nav-link">Bareng</a>
                <a href="#" class="nav-link">Event</a>
            </nav>
            <button class="login-button">
                <div class="glow"></div>
                <div class="glow-2"></div>
                <span>LOGIN</span>
                <span class="icon material-icons">arrow_forward</span>
            </button>
        </header>
        <div class="content">
            <button class="back-button">
                <span class="material-icons">arrow_back</span>
                Kembali ke events
            </button>
            <div class="event-image"></div>
            <div class="event-header">
                <h1 class="event-title">YESS Leardership Mission Training VII</h1>
                <button class="register-button">
                    Daftar
                    <span class="material-icons">arrow_forward</span>
                </button>
            </div>
            <div class="event-info">
                <span class="material-icons">date_range</span>
                <span>19-21 April 2024</span>
            </div>
            <div class="event-info">
                <span class="material-icons">location_on</span>
                <span>Desa Bikium, Soe, Nusa Tenggara Timur</span>
            </div>
            <p class="event-description">
                Biarlah semangat misi terus menyala dalam hidup kita.<br />
                Uis Neno nokan kit, Immanuel!<br />
                Sampe ketemu di YLMT, basodara dong!
            </p>
        </div>
        <footer class="footer">
            <div class="icon" style="background: url(./assets/images/9901ff329f073d0704c58cd4696cf7dc3cf8814095d.png) no-repeat center;"></div>
            <div class="icon" style="background: url(./assets/images/8fe303d7ab95c1bc4441e314410ac276b93183f4.png) no-repeat center;"></div>
            <div class="icon" style="background: url(./assets/images/99f27d54e24427e0c0099be2599780cda3022a73.png) no-repeat center;"></div>
            <div class="contact-us">Contact Us</div>
        </footer>
    </div>
</body>
</html>