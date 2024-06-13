<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>YESS.SUB | YESS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
<link
href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
<link
href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
rel="stylesheet">

<!-- arrow right -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #000 !important;">
  <div class="container-fluid justify-content-between">
      <a class="navbar-brand" href="#">
          <div class="brand-text" style="display: inline-block; margin-left: 10px; color: #f5f5f5;">
              <img src="img/bestchurch.png" alt="" style="width: 60%;">
          </div>
      </a>
      <div class="navbar-nav mx-auto" style="text-align: center;">
          <ul class="navbar-nav" style="margin-bottom: 10px;">
              <li class="nav-item active" style="margin-right: 20px;">
                  <a class="nav-link" href="/" style="color: #f5f5f5;">Home</a>
              </li>
              <li class="nav-item dropdown" style="margin-right: 20px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                      YESS
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item" href="/yess" style="color: #000;">YESS</a></li>
                      <li><a class="dropdown-item" href="/komsel" style="color: #000;">Komsel</a></li>
                      <li><a class="dropdown-item" href="/bareng" style="color: #000;">Bareng</a></li>
                  </ul>
              </li>
              <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="/jadwal" style="color: #f5f5f5;">Jadwal</a>
              </li>
              <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="/ladies-devotion" style="color: #f5f5f5;">Ladies Devotion</a>
              </li>
              <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="/sunday-school" style="color: #f5f5f5;">Sunday School</a>
              </li>
              <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="/event" style="color: #f5f5f5;">Event</a>
              </li>
              <li class="nav-item" style="margin-right: 20px;">
                  <a class="nav-link" href="/pelayanan" style="color: #f5f5f5;">Pelayanan</a>
              </li>
          </ul>
      </div>
      <div class="navbar-nav" style="text-align: right;">
          <ul class="navbar-nav">
              @auth
              <li class="nav-item dropdown" style="margin-right: 20px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                      Welcome, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      @if (auth()->user()->is_admin)
                      <li><a class="dropdown-item" href="/admin" style="color: #000;">Admin Dashboard</a></li>
                      @endif
                      <li>
                          <form action="/logout" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item" style="color: #000;">Logout</button>
                          </form>
                      </li>
                  </ul>
              </li>
              @else
              <li class="nav-item">
                  <a class="nav-link login-link-border" href="/login" style="color: #f5f5f5; border: 1px solid #fff; border-radius: 5px; padding: 8px 20px;">Login</a>
              </li>
              @endauth
          </ul>
      </div>
  </div>
</nav>

<!-- whasap terbang -->
<a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja" class="whatsapp-button">
      <img src="img/wa.png" alt="WhatsApp">
</a>

  <!-- isi konten -->
    <div class="div">
        <div class="div-2">
            <img
                loading="lazy"
                srcset="img/yess/awalYESS.png"
                class="img"
            />
          <div class="div-3">
            <img
              loading="lazy"
              srcset="img/yess/logoYESS.png"
              class="img-2"
            />
            <div class="div-4">Family in Christ</div>
          </div>
        </div>
        <div class="div-5">
          <div class="div-6">
            <div class="column">
              <div class="div-7">
                <div class="div-8">
                  Young People Evangelism Special Services “YESS”
                </div>
                <div class="div-9">
                  Komunitas pemuridan untuk dewasa muda & profesional.
                </div>
                <div class="div-10">
                  <div class="div-11">
                    <div class="div-12">Bimbingan</div>
                    <div class="div-13">Mentoring</div>
                  </div>
                  <div class="div-14">Kesempatan melayani sejak usia muda</div>
                </div>    
                        
              </div>
            </div>
            <div class="column-2">
                <div class="div-16">
                  <div class="div-17 mr-1">SEE MORE &gt;&gt;&gt;</div>
                  <!-- youtube -->
                  <div style="margin-right: 5%;">
                    <a href="https://www.youtube.com/channel/UCMgeyZoGQMWNAy_DdkC26eg">
                    </a>
                    <iframe width="1000" height="410" src="https://www.youtube.com/embed/WWPg-qThoms"
                        title="Hari Terbaik - LOJ Worship | Adoration Night Vol. 4" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                        style="max-width: 100%; border-radius: 50px; box-shadow: 0px 10px 8px rgba(0, 0, 0, 0.4);"></iframe>
                  </div>
  
  
                </div>
              </div>
          </div>
        </div>
        <!-- jadwal ibadah -->
        <div class="div-15">Ibadah YESS</div>
        <div class="div-18"> 
          <img
            loading="lazy"
            srcset="img/yess/jadwalYESS.png"
            class="img"
          />
          <div class="div-19">
            It’s an honor that you would choose to spend an hour of your weekend with
            us!
          </div>
          <div class="div-20">JOIN US FOR YESS</div>
          <a href="/jadwal"
            class="div-201" style="border: 1px solid #fff; margin-top: 10px; font-size: 18px; z-index: 10; padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
            Jadwal Ibadah
          </a>
        </div>
    </div>


    <!-- komsel -->
    <div class="container-fluid" style="margin-top: 20px;">
      <div
          style="position: relative; display: flex; justify-content: center; align-items: center; height: 50vh;">
          <img src="img/yess/komselYESS.png" alt=""
              style="position: absolute; top: 0; width: 98.8vw; height: 50vh;">
          <div
              style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; font-size: 20px;">
              <h2 style="font-family: 'Share', cursive; font-weight: bold;">Get Connected and Grow with Us</h2>
              <h3 style="font-family: 'Ropa Sans', sans-serif;">Dimulai dari Komunitas Sel YESS</h3>
              <a href="/komsel"
                  style="margin-top: 20px; border: 1px solid #fff; padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                  Komsel
              </a>
          </div>
      </div>
  </div>

  <!-- Pelayanan -->
  <div class="container-fluid" style="margin-top: 20px; overflow-x: hidden; margin-bottom: 20px;">
      <div class="row" style="margin-right: -15px; margin-left: -15px;">
          <div class="col-sm-6" style="padding-right: 7.5px; padding-left: 0; position: relative;">
              <div
                  style="position: absolute; top: 50%; left: 40%; transform: translate(-50%, -50%); text-align: left; color: #fff;">
                  <h2 style="font-family: 'Share', cursive; font-weight: bold;">Are you ready to make an impact
                  </h2>
                  <h3 style="font-family: 'Ropa Sans', sans-serif;">Melayani Tuhan adalah anugerah!</h3>
                  <br>

                  <a href="/pelayanan"

                      style="border: 1px solid #fff; padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                      Pelayanan
                  </a>
              </div>
              <img src="img/yess/pelayananYESS.png" alt=""
                  style="width: 100%; height: 50vh; object-fit: cover;">
          </div>
          <div class="col-sm-6"
              style="padding-right: 0; padding-left: 7.5px; position: relative; text-align: right;">
              <div
                  style="position: absolute; top: 50%; right: 40%; transform: translate(50%, -50%); text-align: right; color: #fff;">
                  <h2 style="font-family: 'Share', cursive; font-weight: bold;">Give kindness and get blessed</h2>
                  <h3 style="font-family: 'Ropa Sans', sans-serif;">berangkat bersama dengan dekatmu</h3>
                  <br>
                  <a href="/bareng"
                      style="border: 1px solid #fff; padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                      Bareng
                  </a>
              </div>
              <img src="img/yess/barengYESS.png" alt="" style="width: 100%; height: 50vh; object-fit: cover;">
          </div>
      </div>
  </div>
  <!-- event -->
 
  <div class="divupe-2 container-fluid" style="background-color: #000;">
    <div class="row mt-4">
      <div class="divupe-3 mt-2">UPCOMING EVENT</div> 
    </div>
    <div class="row mt-2">
      <div class="col-4">
          <img
              loading="lazy"
              srcset="img/yess/eventYESS.png"
              class="img-2 m-4"
            />
      </div>
      <div class="col m-4 mt-2">
        <div class="divupe-4">YESS Conference</div>
        <div class="divupe-5">xxxx II || 18.00 WIB || 19 Agustus 2023</div>
        <div class="divupe-6">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor saepe rem voluptates quibusdam eius accusamus repudiandae voluptate obcaecati, recusandae nostrum, inventore optio maxime eveniet aliquid itaque qui doloribus molestias ipsum?
        </div>

        <!-- button direct ke event YESS TERBARU onclick="goToEvent()"--> 
        
        <button class="btn-go">Daftar <i class="fa fa-arrow-right"></i></button>
      </div>
    </div>
  </div>




      <style>
        .div {
          background-color: #000;
          display: flex;
          flex-direction: column;
          margin-top: -10px;
        }
        .div-2 {
          display: flex;
          flex-direction: column;
          overflow: hidden;
          position: relative;
          display: flex;
          min-height: 150px;
          width: 100%;
          align-items: center;
          font-size: 24px;
          color: #fff;
          font-weight: 500;
          text-align: center;
          letter-spacing: 1.2px;
          line-height: 50%;
          justify-content: center;
          padding: 80px 60px;
        }
        @media (max-width: 991px) {
          .div-2 {
            max-width: 100%;
            padding: 0 20px;
          }
        }
        .img {
          position: absolute;
          inset: 0;
          height: 90%;
          width: 100%;
          object-fit: cover;
          object-position: center;
        }
        .div-3 {
          position: relative;
          display: flex;
          width: 271px;
          max-width: 100%;
          flex-direction: column;
          align-items: center;
        
        }
        @media (max-width: 991px) {
          .div-3 {
            margin-top: 40px;
          }
        }
        .img-2 {
          aspect-ratio: 1;
          object-fit: auto;
          object-position: top;
          width: 70%;
        
        }
        .div-4 {
            margin-top: -15%;
          font-family: Montserrat, sans-serif;
        }
        @media (max-width: 991px) {
          .div-4 {
            display: none;
          }
        }
        .div-5 {
          align-self: center;
          margin-top: 10px;
          width: 100%;
          max-width: 1295px;
        }
        @media (max-width: 991px) {
          .div-5 {
            max-width: 100%;
            margin-top: 40px;
          }
        }
        .div-6 {
          gap: 20px;
          display: flex;
        }
        @media (max-width: 991px) {
          .div-6 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
          }
        }
        .column {
          display: flex;
          flex-direction: column;
          line-height: normal;
          width: 55%;
          margin-left: 0px;
        }
        @media (max-width: 991px) {
          .column {
            width: 100%;
          }
        }
        .div-7 {
          display: flex;
          flex-grow: 1;
          flex-direction: column;
          color: #fff;
          font-weight: 400;
          padding: 0 20px;
          
        }
        @media (max-width: 991px) {
          .div-7 {
            max-width: 100%;
            margin-top: 40px;
            
          }
        }
        .div-8 {
          font: 700 48px/75px Roboto Serif, -apple-system, Roboto, Helvetica,
          
            sans-serif;
            margin-left: 30px;
        }
        @media (max-width: 991px) {
          .div-8 {
            max-width: 100%;
            font-size: 40px;
            line-height: 70px;
          }
        }
        .div-9 {
          letter-spacing: 0.72px;
          margin-top: 10px;
          margin-left: 30px;
          font: 20px/40px DM Sans, sans-serif;
        }
        @media (max-width: 991px) {
          .div-9 {
            max-width: 100%;
          }
        }
        .div-10 {
          display: flex;
          margin-top: 30px;
          flex-direction: column;
          font-size: 30px;
          color: #000;
          text-align: center;
          letter-spacing: 0.96px;
          line-height: 100%;
          padding: 0 20px 0 0;
        }
        @media (max-width: 991px) {
          .div-10 {
            max-width: 100%;
            padding-right: 20px;
          }
        }
        .div-11 {
          display: flex;
          gap: 10px;
          white-space: nowrap;
          margin-left: 30px;
        }
        @media (max-width: 991px) {
          .div-11 {
            max-width: 100%;
            flex-wrap: wrap;
            white-space: initial;
          }
        }
        .div-12 {
          font-family: DM Sans, sans-serif;
          background-color: #eeb120;
          align-items: start;
          flex-grow: 1;
          width: fit-content;
          
          padding: 13px 80px 7px 77px;
        }
        @media (max-width: 991px) {
          .div-12 {
            white-space: initial;
            padding: 0 20px 0 30px;
          }
        }
        .div-13 {
          font-family: DM Sans, sans-serif;
          background-color: #eeb120;
          align-items: center;
          flex-grow: 1;
          width: fit-content;
          padding: 13px 40px 7px;
        }
        @media (max-width: 991px) {
          .div-13 {
            white-space: initial;
            padding: 0 20px;
          }
        }
        .div-14 {
          font-family: DM Sans, sans-serif;
          background-color: #eeb120;
          margin-top: 7px;
          justify-content: center;
          margin-left: 30px;
          padding: 13px 17px;
        }
        @media (max-width: 991px) {
          .div-14 {
            max-width: 100%;
          }
        }
        .div-15 {
          letter-spacing: 1.92px;
          margin-top: 100px;
          color: white;
          align-self: flex-start;
          font: 800 80px/75% Roboto Serif, -apple-system, Roboto, Helvetica,
            sans-serif;
            margin-left: 60px;
        }
        @media (max-width: 991px) {
          .div-15 {
            max-width: 100%;
            margin-top: 40px;
            margin-left: 20px;
            font-size: 40px;
          }
        }
        .column-2 {
          display: flex;
          flex-direction: column;
          line-height: normal;
          width: 45%;
          margin-left: 20px;
        }
        @media (max-width: 991px) {
          .column-2 {
            width: 100%;
          }
        }
        .div-16 {
          display: flex;
          flex-direction: column;
          font-size: 32px;
          color: #eeb120;
          font-weight: 800;
          letter-spacing: 6.4px;
          padding: 0 20px;
        }
        @media (max-width: 991px) {
          .div-16 {
            max-width: 100%;
            margin-top: 40px;
          }
        }
        .div-17 {
          font-family: Alegreya Sans, sans-serif;
          margin-right: 20px;
          align-self: end;
        }
        .img-3 {
          aspect-ratio: 2.5;
          object-fit: auto;
          object-position: center;
          width: 100%;
          box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.25);
          border-color: rgba(238, 177, 32, 1);
          border-style: solid;
          border-width: 1px;
          margin-top: 34px;
        }
        @media (max-width: 991px) {
          .img-3 {
            max-width: 100%;
          }
        }
        .div-18 {
          display: flex;
          flex-direction: column;
          overflow: hidden;
          position: relative;
          display: flex;
          min-height: 603px;
          margin-top: 20px;
          width: 100%;
          align-items: end;
          font-size: 50px;
          color: #fff;
          padding: 0 63px 80px;
        }
        @media (max-width: 991px) {
          .div-18 {
            max-width: 100%;
            margin-top: 40px;
            font-size: 40px;
            padding: 0 20px;
          }
        }
        .div-19 {
          position: relative;
          font-family: DM Sans, sans-serif;
          font-weight: 400;
          line-height: 80px;
          float: right;
          z-index: 10;
        }
        @media (max-width: 991px) {
          .div-19 {
            max-width: 100%;
            font-size: 22px;
            line-height: 55px;
          }
        }
        .div-20 {
          position: relative;
          text-align: center;
          font-family: DM Sans, sans-serif;
          font-weight: 700;
          margin-right: -4px;
          letter-spacing: 3.2px;
          margin-top: 170px;
        }
        @media (max-width: 991px) {
          .div-20, .div-201 {
            max-width: 100%;
            font-size: 40px;
          }
        }
        .div-21 {
          position: relative;
          text-align: center;
          margin: 54px 0 14px;
          font: 600 22px Montserrat, sans-serif;
        }
        @media (max-width: 991px) {
          .div-21 {
            margin: 40px 10px 0 0;
          }
        }

      /* event */
        .divupe-2 {
    display: flex;
    flex-grow: 1;
    flex-direction: column;
    color: #fff;
    padding: 0 20px;
  }
  @media (max-width: 991px) {
    .divupe-2 {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .divupe-3 {
    text-align: right;
    align-self: end;
    font: 500 50px/50px Montserrat, sans-serif;
  }
  @media (max-width: 991px) {
    .divupe-3 {
      font-size: 30px;
      line-height: 44px;
    }
  }
  .divupe-4 {
    font: 600 40px Kanit, sans-serif;
  }
  @media (max-width: 991px) {
    .divupe-4 {
      max-width: 100%;
      font-size: 30px;
    }
  }
  .divupe-5 {
    color: #c1c1c1;
    margin-top: 14px;
    font: 700 25px Roboto, sans-serif;
  }
  @media (max-width: 991px) {
    .divupe-5 {
      max-width: 100%;
      font: 15px;
    }
  }
  .divupe-6 {
    color: #c1c1c1;
    letter-spacing: 0.56px;
    margin-top: 14px;
    font: 400 20px Roboto, sans-serif;
  }
  @media (max-width: 991px) {
    .divupe-6 {
      max-width: 100%;
      font:10px;
    }
  }
  .divupe-7 {
    border-radius: 40px;
    background-color: #eeb120;
    align-self: start;
    display: flex;
    margin-top: 17px;
    gap: 8px;
    font-size: 18px;
    font-weight: 500;
    white-space: nowrap;
    line-height: 133%;
    padding: 16px 26px;
  }
  @media (max-width: 991px) {
    .divupe-7 {
      white-space: initial;
      padding: 0 20px;
      font: 12px;
    }
  }
  .divupe-8 {
    font-family: DM Sans, sans-serif;
  }
  .imgupe-2 {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 20px;
  }

   /* button ke event tertentu(event yess terbbaru) */
    .btn-go{
    margin-top: 10px;
      border-radius: 35px;
      align-items: center; /* Mengatur isi (tanda panah) menjadi terpusat secara vertikal */
      justify-content: center; /* Mengatur isi (tanda panah) menjadi terpusat secara horizontal */
      display: flex; /* Menjadikan elemen tampilan flex */
      background: linear-gradient(0deg, #eeb120 0%, #eeb120 100%), #eeb120;
      width: 100px;
      font-weight: 500;
      height: 55px;
      gap: 6px;
    }

    .btn-go:hover {
  box-shadow:  #eeb120 0 6px 8px;
  transform: translateY(-2px);
}

.btn-go:active {
  box-shadow: none;
  transform: translateY(0);
}


      </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>