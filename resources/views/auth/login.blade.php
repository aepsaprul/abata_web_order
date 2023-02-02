<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('assets/logo.png') }}" alt="" style="width: 150px;">
        </a>
        <p>Bertumbuh Bersama Abata</p>
      </div>        
      <div class="form">
        <div class="header">
          <div><h2>Login</h2></div>
          <div><a href="{{ route('register') }}">Register</a></div>
        </div>
        <form action="{{ route('login.auth') }}" method="POST">
          @csrf
          <div class="email-container">
            <label for="">Email</label>
            <div class="input">
              <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror" required autofocus>
            </div>
            <em class="pesan-kesalahan">@error('email') {{ $message }} @enderror</em>
          </div>
          <div class="password-container">
            <label for="">Password</label>
            <div class="input">
              <input type="password" name="password" id="password" required>
              <i class="fa fa-eye-slash lihat-password" style="width: 25px; cursor: pointer;"></i>
              <i class="fa fa-eye tutup-password" style="width: 25px; cursor: pointer; display: none;"></i>
            </div>
          </div>
          <div class="remember-container">
            <label for="remember">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <span>Ingat Saya</span>
            </label>
          </div>
          <div class="signin-container">
            <button type="submit" class="btn-signin">Masuk</button>
          </div>
        </form>
      </div>
      <footer>
        <p>&copy; 2022 - {{ date('Y') }} | Abata</p>
      </footer>
    </div>
    <img src="{{ asset('assets/wave.svg') }}" alt="">
  </div>

  <script>
    const lihatPassword = document.querySelector(".lihat-password");
    const tutupPassword = document.querySelector('.tutup-password');
    const password = document.querySelector('#password');

    lihatPassword.addEventListener('click', function () {
      password.setAttribute('type', 'text');
      this.style.display = 'none';
      tutupPassword.style.display = 'block';
    })

    tutupPassword.addEventListener('click', function () {
      password.setAttribute('type', 'password');
      this.style.display = 'none';
      lihatPassword.style.display = 'block';
    })
  </script>
</body>
</html>