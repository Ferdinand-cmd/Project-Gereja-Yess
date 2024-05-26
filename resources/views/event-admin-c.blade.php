<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>YESS.SUB | Event Admin</title>
        <style>
            body {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            }

            .header-container {
            box-shadow: 0px 6px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: #000;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 36px 80px;
            color: #f5f5f5;
            gap: 20px;
            }

            .header-gap {
            display: flex;
            flex-direction: column;
            font-size: 15px;
            font-weight: 400;
            }

            .header-logo {
            aspect-ratio: 2.7;
            object-fit: cover;
            width: 108px;
            }

            .header-text {
            font-family: "Montserrat", sans-serif;
            margin-top: 6px;
            }

            .nav-container {
            display: flex;
            gap: 20px;
            font-size: 18px;
            font-weight: 500;
            justify-content: space-between;
            }

            .nav-item {
            font-family: "Montserrat", sans-serif;
            }

            .nav-highlight {
            color: #eeb120;
            font-weight: 800;
            white-space: nowrap;
            border-bottom: 3px solid #eeb120;
            }

            .nav-item.center {
            text-align: center;
            }

            @media (max-width: 991px) {
            .header-container,
            .nav-container {
                flex-wrap: wrap;
                padding: 0 20px;
            }

            .nav-highlight {
                white-space: initial;
            }

            .header-gap {
                max-width: 100%;
            }

            .nav-item.center {
                text-align: initial;
            }
            }

            .main-container {
            display: flex;
            flex-direction: column;
            margin-top: 40px;
            width: 100%;
            max-width: 1245px;
            gap: 20px;
            }

            .main-header {
            display: flex;
            gap: 20px;
            color: #000;
            padding: 0 20px;
            }

            .main-title {
            flex-grow: 1;
            font-size: 80px;
            font-family: "Kanit", sans-serif;
            }

            .main-button-container {
            display: flex;
            gap: 20px;
            color: #eeb120;
            font-weight: 400;
            padding: 24px 49px;
            }

            .main-button {
            font-size: 60px;
            font-family: "Material Icons", sans-serif;
            text-align: center;
            }

            @media (max-width: 991px) {
            .main-title {
                font-size: 40px;
            }

            .main-button-container {
                padding: 0 20px;
            }

            .main-header {
                max-width: 100%;
                flex-wrap: wrap;
            }

            .main-button {
                font-size: 40px;
            }
            }

            .event-section {
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: #f4f4f4;
            margin-top: 35px;
            width: 1205px;
            max-width: 100%;
            padding: 17px 0 17px 38px;
            }

            .event-row {
            display: flex;
            gap: 20px;
            }

            .event-item {
            display: flex;
            flex-direction: column;
            width: 30%;
            aspect-ratio: 1.4;
            margin-top: 21px;
            overflow: hidden;
            align-items: end;
            padding: 80px 60px 0;
            }

            .event-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            position: absolute;
            inset: 0;
            }

            .event-date,
            .event-month {
            position: relative;
            background-color: rgba(0, 0, 0, 0.25);
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 10px 31px;
            font-family: "Roboto", sans-serif;
            }

            .event-date {
            font-size: 32px;
            margin-top: 6px;
            }

            .event-month {
            font-size: 16px;
            margin-top: 102px;
            }

            .event-details {
            display: flex;
            flex-direction: column;
            width: 70%;
            margin-left: 20px;
            }

            .event-meta {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 0 2px;
            font-family: "DM Sans", sans-serif;
            font-size: 18px;
            font-weight: 500;
            }

            .event-actions {
            display: flex;
            gap: 12px;
            }

            .event-action {
            background-color: #000;
            color: #fff;
            display: flex;
            gap: 15px;
            white-space: nowrap;
            padding: 17px 18px;
            }

            .event-action img {
            aspect-ratio: 1;
            width: 20px;
            }

            .event-description {
            color: #646464;
            font-size: 20px;
            font-family: "Roboto", sans-serif;
            margin-top: 18px;
            letter-spacing: 0.4px;
            }

            .event-description h2 {
            color: #000;
            font-size: 36px;
            font-family: "Kanit", sans-serif;
            margin-top: 30px;
            }

            .event-location {
            color: #646464;
            font-size: 20px;
            font-family: "Roboto", sans-serif;
            margin-top: 15px;
            }

            .footer-container {
            border-radius: 40px 40px 0px 0px;
            background-color: #000;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 38px 52px;
            margin-top: 143px;
            flex-wrap: wrap;
            }

            .footer-item {
            display: flex;
            gap: 20px;
            }

            .footer-icons {
            display: flex;
            gap: 20px;
            }

            .footer-icon img {
            width: 66px;
            object-fit: cover;
            }
        </style>
    </head>
    <body>
        <div class="header-container">
        <div class="header-gap">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ea70bf3cf3b7e9699c799d874034d07d6142067effe5e2fe8d61eed42517eff5?apiKey=f9ed83d6b13f4286938197498a891b31&" class="header-logo" alt="Best Church Logo" />
            <div class="header-text">BEST CHURCH</div>
        </div>
        <nav class="nav-container">
            <div class="nav-item nav-highlight">Home</div>
            <div class="nav-item">Daftar Pelayanan</div>
            <div class="nav-item">KomSel</div>
            <div class="nav-item">Bareng</div>
            <div class="nav-item">Event</div>
            <div class="nav-item nav-item center">Penjadwalan Pelayanan</div>
            <div class="nav-item nav-item center">List Jemaat</div>
            <div class="nav-item">Analisis</div>
        </nav>
        </div>

        <section class="main-container">
        <header class="main-header">
            <h1 class="main-title">Event</h1>
            <button class="main-button-container">
            <span class="main-button">add_circle_outline</span>
            <span>Add Event</span>
            </button>
        </header>

        <article class="event-section">
            <div class="event-row">
            <div class="event-item">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/822aeb911358eaa71c142746dc40e2caece2dca05e0077f1ca59a46b32605bde?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Event Image" />
                <div class="event-date">30</div>
                <div class="event-month">MAR</div>
            </div>
            <div class="event-details">
                <div class="event-meta">
                <div>Archieved</div>
                <div class="event-actions">
                    <div class="event-action">
                    <span class="material-icons">mode_edit</span>
                    Edit
                    </div>
                    <div class="event-action">
                    <div>15</div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/35218d5028e8888eca6a59d0ce7493720050d929768e54d75a33479ae7235b25?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Event Icon" />
                    </div>
                </div>
                </div>
                <h2 class="event-description">Putus atau Terus</h2>
                <div class="event-location">
                Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB
                </div>
                <div class="event-description">
                YESS Surabaya Valentine’s Day Celebration "Putus atau Terus"
                <br />
                Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan
                PENGALAMAN YANG HEBAT bagi kamu ya...
                </div>
            </div>
            </div>
        </article>
        <article class="event-section">
            <div class="event-row">
            <div class="event-item">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9eee4a4433c5aa9edd3838b6b293dcf4f77d334c5c2ae416679cc83373b1feed?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Event Image" />
                <div class="event-date">19-21</div>
                <div class="event-month">APR</div>
            </div>
            <div class="event-details">
                <div class="event-meta">
                <div>Archieved</div>
                <div class="event-actions">
                    <div class="event-action">
                    <span class="material-icons">mode_edit</span>
                    Edit
                    </div>
                    <div class="event-action">
                    <div>20</div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/35218d5028e8888eca6a59d0ce7493720050d929768e54d75a33479ae7235b25?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Event Icon" />
                    </div>
                </div>
                </div>
                <h2 class="event-description">
                YESS Leardership Mission Training VII
                </h2>
                <div class="event-location">
                Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024
                </div>
                <div class="event-description">
                Biarlah semangat misi terus menyala dalam hidup kita. <br />
                Uis Neno nokan kit, Immanuel! <br />
                Sampe ketemu di YLMT, basodara dong!
                </div>
            </div>
            </div>
        </article>

        <footer class="footer-container">
            <div class="footer-item footer-icons">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f732184bd734eb35049aa0e9c1bf3f8cb79833eb3067fa0aaa796f2d96ec2626?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Footer Icon" class="footer-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c6e4410b564300efc0d0b12750c0b4b42a143e976fe2a9c476bdf5bcdd4492e0?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Footer Icon" class="footer-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7f7622def80581d4724ca49d227a2f2377c9a28876652bf2a6cfa3d4cd99612a?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Footer Icon" class="footer-icon" />
            </div>
            <div class="footer-item">
            <h2>Contact Us</h2>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1ce370710d874bbe9158f06d19ab3959c3cadf880a62ee33aec4977717cf00f6?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Contact Us Icon" class="footer-icon" />
            </div>
        </footer>
        </section>
    </body>
</html>