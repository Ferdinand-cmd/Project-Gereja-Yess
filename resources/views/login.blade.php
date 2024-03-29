<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>YESS.SUB | Login</title>
</head>

<body style="background-image: url('img/login_bg.jpg');">

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <br>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <select name="domisili" id="domisili">
                    <option value="">Pilih Domisili</option>
                    <option value="Surabaya Timur">Surabaya Timur</option>
                    <option value="Surabaya Selatan">Surabaya Selatan</option>
                    <option value="Surabaya Barat">Surabaya Barat</option>
                    <option value="Surabaya Utara">Surabaya Utara</option>
                </select>
                <select name="jemaat" id="jemaat">
                    <option value="">Pilih Kategori Jemaat</option>
                    <option value="Jemaat YESS">Jemaat YESS</option>
                    <option value="Guest">Guest</option>
                </select>

                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Login</h1>
                <br>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Home!</h1>
                    <p>We're so excited that you want to connect with us</p>
                    <button class="hidden" id="login">Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Shalom!</h1>
                    <p>If you haven't yet created an account, you can do so by clicking "Sign Up" below</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>