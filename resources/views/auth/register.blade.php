<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
          <div><h2>Register Sekarang</h2></div>
          <div class="header-text">Sudah punya akun Abata? <a href="{{ route('login') }}">Login</a></div>
        </div>
        <form action="{{ route('register.store') }}" method="POST">
          @csrf
          <div class="input-container">
            <label for="nama_lengkap"><span style="color: red;">*</span> Nama Lengkap</label>
            <div class="input">
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="@error('nama_lengkap') is-invalid @enderror"  autofocus>
            </div>
            <em style="font-size: 13px; color: grey">min 3 karakter</em>
            <em class="pesan-kesalahan">@error('nama_lengkap') {{ $message }} @enderror</em>
          </div>
          <div class="input-container">
            <label for="username"><span style="color: red;">*</span> Username</label>
            <div class="input">
              <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror"  autofocus>
            </div>
            <em style="font-size: 13px; color: grey">min 3 karakter, jangan spasi</em>
            <em class="pesan-kesalahan">@error('username') {{ $message }} @enderror</em>
          </div>
          <div class="input-container">
            <label for="telepon"><span style="color: red;">*</span> Telepon <em style="font-size: 16px">(08xxxxxxxxxx)</em></label>
            <div class="input">
              <input type="text" name="telepon" id="telepon" class="@error('telepon') is-invalid @enderror"  autofocus>
            </div>
            <em style="font-size: 13px; color: grey">min 10 karakter, harus angka</em>
            <em class="pesan-kesalahan">@error('telepon') {{ $message }} @enderror</em>
          </div>
          <div class="input-container">
            <label for=""><span style="color: red;">*</span> Email</label>
            <div class="input">
              <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror"  autofocus>
            </div>
            <em class="pesan-kesalahan">@error('email') {{ $message }} @enderror</em>
          </div>
          <div class="input-container">
            <label for=""><span style="color: red;">*</span> Password</label>
            <div class="input">
              <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" >
              <i class="fa fa-eye-slash lihat-password" style="width: 25px; cursor: pointer;"></i>
              <i class="fa fa-eye tutup-password" style="width: 25px; cursor: pointer; display: none;"></i>
            </div>
            <em style="font-size: 13px; color: grey">min 8 karakter, min ada 1 simbol</em>
            <em class="pesan-kesalahan">@error('password') {{ $message }} @enderror</em>
          </div>
          <div class="input-container">
            <label for="password-confirm"><span style="color: red;">*</span> Konfirmasi Password</label>
            <div class="input">
              <input type="password" name="password_confirmation" id="password-confirm" >
            </div>
            <em style="font-size: 13px; color: grey">harus sama denga password</em>
          </div>
          <div class="signin-container">
            <button type="submit" class="btn-signin">Daftar</button>
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