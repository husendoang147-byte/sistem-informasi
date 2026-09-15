<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register | Sistem Informasi Masjid</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


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


        .register-wrapper {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;

        }


        .register-box {

            width: 100%;

            max-width: 1050px;

            min-height: 600px;

            background: white;

            border-radius: 28px;

            overflow: hidden;

            display: grid;

            grid-template-columns: 45% 55%;

            box-shadow:
                0 20px 60px rgba(21,128,61,.12);

        }


        /* =========================
           LEFT
        ========================== */

        .register-left {

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


        .register-left::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            right: -120px;

            top: -100px;

            background: rgba(255,255,255,.07);

        }


        .register-left::after {

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

            font-size: 36px;

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

            margin-top: 45px;

            text-align: center;

            opacity: .18;

            font-size: 110px;

        }


        /* =========================
           RIGHT
        ========================== */

        .register-right {

            padding: 45px 65px;

            display: flex;

            flex-direction: column;

            justify-content: center;

        }


        .form-title {

            margin-bottom: 28px;

        }


        .form-title h2 {

            font-size: 27px;

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
        ========================== */

        .form-label {

            font-size: 12px;

            font-weight: 700;

            color: #334155;

            margin-bottom: 7px;

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

            height: 46px;

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

        }


        /* =========================
           BUTTON
        ========================== */

        .btn-register {

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


        .btn-register:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(22,163,74,.28);

        }


        .login-text {

            text-align: center;

            margin-top: 20px;

            font-size: 13px;

            color: #64748b;

        }


        .login-text a {

            color: #15803d;

            font-weight: 700;

            text-decoration: none;

        }


        .login-text a:hover {

            text-decoration: underline;

        }


        .error-text {

            color: #dc2626;

            font-size: 11px;

            margin-top: 5px;

        }


        /* =========================
           RESPONSIVE
        ========================== */

        @media(max-width:850px) {

            .register-box {

                grid-template-columns: 1fr;

                max-width: 520px;

            }

            .register-left {

                display: none;

            }

            .register-right {

                padding: 40px 35px;

            }

        }


        @media(max-width:450px) {

            .register-wrapper {

                padding: 15px;

            }

            .register-right {

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

<div class="register-wrapper">

    <div class="register-box">


        

        <div class="register-left">

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
                    Bergabung<br>
                    Bersama Kami 🤝
                </h1>

                <p>
                    Buat akun untuk mengakses Sistem Informasi
                    Masjid dan membantu pengelolaan masjid
                    menjadi lebih mudah dan terorganisir.
                </p>

            </div>


            <div class="mosque-decoration">

                <i class="fas fa-mosque"></i>

            </div>

        </div>


        

        <div class="register-right">

            <div class="form-title">

                <h2>
                    Buat Akun
                </h2>

                <p>
                    Lengkapi data berikut untuk membuat akun baru.
                </p>

            </div>


            <form method="POST" action="<?php echo e(route('register')); ?>">

                <?php echo csrf_field(); ?>


                

                <div class="mb-3">

                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <div class="input-group-custom">

                        <i class="fas fa-user input-icon"></i>

                        <input
                            type="text"
                            name="name"
                            value="<?php echo e(old('name')); ?>"
                            class="form-control-custom"
                            placeholder="Masukkan nama lengkap"
                            required
                            autofocus
                        >

                    </div>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <div class="error-text">
                            <?php echo e($message); ?>

                        </div>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <div class="input-group-custom">

                        <i class="fas fa-envelope input-icon"></i>

                        <input
                            type="email"
                            name="email"
                            value="<?php echo e(old('email')); ?>"
                            class="form-control-custom"
                            placeholder="Masukkan email"
                            required
                        >

                    </div>

                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <div class="error-text">
                            <?php echo e($message); ?>

                        </div>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                

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
                            placeholder="Minimal 8 karakter"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('password','eyePassword')"
                        >

                            <i
                                class="fas fa-eye"
                                id="eyePassword"
                            ></i>

                        </button>

                    </div>

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <div class="error-text">
                            <?php echo e($message); ?>

                        </div>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>


                

                <div class="mb-4">

                    <label class="form-label">
                        Konfirmasi Password
                    </label>

                    <div class="input-group-custom">

                        <i class="fas fa-shield-halved input-icon"></i>

                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            class="form-control-custom"
                            placeholder="Ulangi password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('password_confirmation','eyeConfirm')"
                        >

                            <i
                                class="fas fa-eye"
                                id="eyeConfirm"
                            ></i>

                        </button>

                    </div>

                </div>


                

                <button
                    type="submit"
                    class="btn-register"
                >

                    <i class="fas fa-user-plus me-2"></i>

                    Daftar Sekarang

                </button>

            </form>


            <div class="login-text">

                Sudah memiliki akun?

                <a href="<?php echo e(route('login')); ?>">
                    Masuk sekarang
                </a>

            </div>

        </div>

    </div>

</div>


<script>

function togglePassword(inputId, iconId) {

    const input = document.getElementById(inputId);

    const icon = document.getElementById(iconId);

    if (input.type === "password") {

        input.type = "text";

        icon.classList.remove("fa-eye");

        icon.classList.add("fa-eye-slash");

    } else {

        input.type = "password";

        icon.classList.remove("fa-eye-slash");

        icon.classList.add("fa-eye");

    }

}

</script>

</body>

</html><?php /**PATH E:\Husen_masjid\resources\views/auth/register.blade.php ENDPATH**/ ?>