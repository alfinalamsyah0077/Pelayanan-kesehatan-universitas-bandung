<?php
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"></script>
  </head>
  <body>
    <div class="wrapper">
      <span class="bg-animate"></span>
      <span class="bg-animate2"></span>
      <div class="form-box login">
        <h2 class="animation" style="--i: 0; --j: 21">Login</h2>
        <form action="#">
          <div class="input-box animation" style="--i: 1; --j: 22">
            <input name="username" type="text" required />
            <label>Username</label>
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box animation" style="--i: 2; --j: 23">
            <input name="password" type="text" required />
            <label>Password</label>
            <i class="bx bx-lock-alt"></i>
          </div>
          <button
            name="submit"
            type="submit"
            class="btn animation"
            style="--i: 3; --j: 24"
            value= <?php echo date ("h:i:sa"); ?>
          >
            <a href="reg.php">Login/</a>
            <a href="reg.php">Gabung</a>
          </button>
          <div class="logreg-link animation" style="--i: 4; --j: 25">
            <p>
              Don't have an account?
              <a href="#" class="register-link">Sign Up</a>
            </p>
          </div>
        </form>
      </div>
      <div class="info-text login">
        <h2 class="animation" style="--i: 0; --j: 20">Login Account</h2>
        <p class="animation" style="--i: 1; --j: 21">
          Silahkan login menggunakan Account anda, jika tidak memiliki silahkan
          registrasi dahulu, terimakasih
        </p>
      </div>
      <div class="form-box register">
        <h2 class="animation" style="--i: 17; --j: 0">Sign Up</h2>
        <form action="#">
          <div class="input-box animation" style="--i: 18; --j: 1">
            <input type="text" required />
            <label>Username</label>
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box animation" style="--i: 19; --j: 2">
            <input type="text" required />
            <label>Email</label>
            <i class="bx bxs-envelope"></i>
          </div>
          <div class="input-box animation" style="--i: 20; --j: 3">
            <input type="text" required />
            <label>Password</label>
            <i class="bx bx-lock-alt"></i>
          </div>
          <button type="submit" class="btn animation" style="--i: 21; --j: 4">
            Sign up
          </button>
          <div class="logreg-link animation" style="--i: 22; --j: 5">
            <p>
              Already have an account?
              <a href="#" class="login-link">Login</a>
            </p>
          </div>
        </form>
      </div>
      <div class="info-text register animation">
        <h2 class="animation" style="--i: 17; --j: 0">Register account</h2>
        <p class="animation" style="--i: 18; --j: 1">
          Silahkan mengisi form registrasi agar bisa menggunakan fasilitas kami,
          terimkasih.
        </p>
      </div>
    </div>
    <script src="login.js"></script>
  </body>
</html>
