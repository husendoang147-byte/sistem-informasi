<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sistem Informasi Masjid</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", sans-serif;
            background: #eef8f3;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-box {
            width: 100%;
            max-width: 1050px;
            min-height: 600px;
            background: white;
            border-radius: 28px;
            overflow: hidden;

            display: grid;
            grid-template-columns: 45% 55%;

            box-shadow: 0 20px 60px rgba(21, 128, 61, .12);
        }


        /* =========================
           LEFT
        ========================= */

        .login-left {
            position: relative;
            overflow: hidden;

            padding: 50px 45px;

            background:
                linear-gradient(
                    145deg,
                    #14532d,
                    #15803d,
                    #16a34a
                );

            color: white;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-left::before {
            content: "";
            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            right: -120px;
            top: -100px;

            background: rgba(255,255,255,.07);
        }

        .login-left::after {
            content: "";
            position: absolute;

            width: 250px;
            height: 250px;

            border-radius: 50%;

            left: -130px;
            bottom: -100px;

            background: rgba(255,255,255,.06);
        }

        .brand {
            position: relative;
            z-index: 2;

            display: flex;
            align-items: center;

            gap: 15px;

            margin-bottom: 40px;
        }

        .brand-icon {
            width: 58px;
            height: 58px;

            border-radius: 17px;

            background: rgba(255,255,255,.16);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;
        }

        .brand-title {
            font-size: 19px;
            font-weight: 800;
        }

        .brand-subtitle {
            font-size: 11px;
            opacity: .75;
        }

        .welcome {
            position: relative;
            z-index: 2;
        }

        .welcome h1 {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 15px;
        }

        .welcome p {
            color: rgba(255,255,255,.82);
            font-size: 14px;
            line-height: 1.7;
            max-width: 380px;
        }

        .mosque-decoration {
            position: relative;
            z-index: 2;

            margin-top: 50px;

            text-align: center;

            opacity: .18;

            font-size: 120px;
        }


        /* =========================
           RIGHT
        ========================= */

        .login-right {
            padding: 55px 65px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-title {
            margin-bottom: 35px;
        }

        .form-title h2 {
            font-size: 28px;
            font-weight: 800;
            color: #172033;
            margin-bottom: 7px;
        }

        .form-title p {
            color: #64748b;
            font-size: 13px;
            margin: 0;
        }


        /* =========================
           FORM
        ========================= */

        .form-label {
            font-size: 12px;
            font-weight: 700;
            color: #334155;

            margin-bottom: 8px;
        }

        .input-group-custom {
            position: relative;
        }

        .input-icon {
            position: absolute;

            left: 15px;
            top: 50%;

            transform: translateY(-50%);

            color: #94a3b8;

            font-size: 14px;

            z-index: 5;
        }

        .form-control-custom {
            width: 100%;

            height: 48px;

            border: 1px solid #e2e8f0;

            border-radius: 12px;

            padding: 0 15px 0 43px;

            font-size: 13px;

            outline: none;

            transition: .2s ease;
        }

        .form-control-custom:focus {
            border-color: #16a34a;

            box-shadow:
                0 0 0 4px rgba(22,163,74,.10);
        }

        .password-toggle {
            position: absolute;

            right: 15px;
            top: 50%;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #94a3b8;

            cursor: pointer;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn-login {
            width: 100%;

            height: 48px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #15803d,
                    #16a34a
                );

            color: white;

            font-size: 13px;
            font-weight: 700;

            box-shadow:
                0 8px 20px rgba(22,163,74,.20);

            transition: .2s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(22,163,74,.28);
        }


        /* =========================
           REGISTER
        ========================= */

        .register-text {
            text-align: center;

            margin-top: 25px;

            font-size: 13px;

            color: #64748b;
        }

        .register-text a {
            color: #15803d;

            font-weight: 700;

            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }


        /* =========================
           ALERT
        ========================= */

        .alert-custom {
            border: none;

            border-radius: 12px;

            font-size: 12px;

            padding: 12px 15px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 850px) {

            .login-box {
                grid-template-columns: 1fr;

                max-width: 520px;
            }

            .login-left {
                display: none;
            }

            .login-right {
                padding: 45px 35px;
            }

        }

        @media(max-width: 450px) {

            .login-wrapper {
                padding: 15px;
            }

            .login-right {
                padding: 35px 25px;
            }

        }
        
        body {
    background: #15803d !important;
    min-height: 100vh;
}

    </style>
</head>


<body>

<div class="login-wrapper">

    <div class="login-box">


        {{-- =========================
             LEFT PANEL
        ========================== --}}

        <div class="login-left">

            <div class="brand">

                <div class="brand-icon">
                    <i class="fas fa-mosque"></i>
                </div>

                <div>
                    <div class="brand-title">
                        Sistem Informasi Masjid
                    </div>

                    <div class="brand-subtitle">
                        Manajemen Masjid Digital
                    </div>
                </div>

            </div>


            <div class="welcome">

                <h1>
                    Selamat Datang<br>
                    Kembali 👋
                </h1>

                <p>
                    Kelola berbagai informasi dan kegiatan masjid
                    dengan lebih mudah, rapi, dan terorganisir.
                </p>

            </div>


            <div class="mosque-decoration">

                <i class="fas fa-mosque"></i>

            </div>

        </div>


        {{-- =========================
             RIGHT PANEL
        ========================== --}}

        <div class="login-right">

            <div class="form-title">

                <h2>
                    Masuk ke Akun
                </h2>

                <p>
                    Silakan masukkan akun Anda untuk melanjutkan.
                </p>

            </div>


            {{-- ERROR --}}

            @if($errors->any())

                <div class="alert alert-danger alert-custom mb-4">

                    <i class="fas fa-circle-exclamation me-2"></i>

                    Email atau password yang Anda masukkan salah.

                </div>

            @endif


            @if(session('status'))

                <div class="alert alert-success alert-custom mb-4">

                    <i class="fas fa-circle-check me-2"></i>

                    {{ session('status') }}

                </div>

            @endif


            <form method="POST" action="{{ route('login') }}">

                @csrf


                {{-- EMAIL --}}

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <div class="input-group-custom">

                        <i class="fas fa-envelope input-icon"></i>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control-custom"
                            placeholder="Masukkan email Anda"
                            required
                            autofocus
                        >

                    </div>

                </div>


                {{-- PASSWORD --}}

                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <div class="input-group-custom">

                        <i class="fas fa-lock input-icon"></i>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control-custom"
                            placeholder="Masukkan password Anda"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                        >

                            <i class="fas fa-eye" id="eyeIcon"></i>

                        </button>

                    </div>

                </div>


                {{-- REMEMBER --}}

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div class="form-check">

                        <input
                            type="checkbox"
                            name="remember"
                            class="form-check-input"
                            id="remember"
                        >

                        <label
                            for="remember"
                            class="form-check-label"
                            style="font-size:12px;color:#64748b;"
                        >
                            Ingat saya
                        </label>

                    </div>


                    @if(Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            style="
                                font-size:12px;
                                color:#15803d;
                                text-decoration:none;
                                font-weight:600;
                            "
                        >
                            Lupa password?
                        </a>

                    @endif

                </div>


                {{-- BUTTON --}}

                <button
                    type="submit"
                    class="btn-login"
                >

                    <i class="fas fa-right-to-bracket me-2"></i>

                    Masuk

                </button>

            </form>


            {{-- REGISTER --}}

            <div class="register-text">

                Belum memiliki akun?

                <a href="{{ route('register') }}">
                    Daftar sekarang
                </a>

            </div>

        </div>

    </div>

</div>


<script>

function togglePassword() {

    const password = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');

    if (password.type === 'password') {

        password.type = 'text';

        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');

    } else {

        password.type = 'password';

        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');

    }

}

</script>

</body>

</html>