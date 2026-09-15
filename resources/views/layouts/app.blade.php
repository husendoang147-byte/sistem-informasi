<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') | Sistem Informasi Masjid</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#eef5f3;
        }

        .wrapper{
            display:flex;
        }

        /* =======================
           SIDEBAR
        ======================== */

       .sidebar{
    width:280px;
    min-height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:linear-gradient(180deg,#166534,#15803d,#22c55e);
    color:#fff;
    padding:22px;
    box-shadow:8px 0 25px rgba(0,0,0,.08);
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:30px;
    padding-bottom:20px;
    border-bottom:1px solid rgba(255,255,255,.15);
}

.logo-icon{
    width:60px;
    height:60px;
    border-radius:16px;
    background:rgba(255,255,255,.15);
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:28px;
}

.menu{
    list-style:none;
    padding:0;
    margin:0;
}

.menu li{
    margin-bottom:8px;
}

.menu a{
    display:flex;
    align-items:center;
    gap:15px;
    padding:14px 18px;
    color:white;
    text-decoration:none;
    border-radius:14px;
    transition:.3s;
}

.menu a i{
    width:42px;
    height:42px;
    display:flex;
    justify-content:center;
    align-items:center;
    background:rgba(255,255,255,.12);
    border-radius:12px;
}

.menu a:hover{
    background:rgba(255,255,255,.12);
    transform:translateX(5px);
}

.menu a.active{
    background:#fff;
    color:#166534;
    font-weight:600;
    box-shadow:0 10px 20px rgba(0,0,0,.12);
}

.menu a.active i{
    background:#16a34a;
    color:#fff;
}

.sidebar-user{
    margin-top:20px;
    padding-top:20px;
    border-top:1px solid rgba(255,255,255,.15);
}

.sidebar-user small{
    color:#d1fae5;
}

.logout-btn{
    width:100%;
    border:none;
    border-radius:12px;
    background:#dc2626;
    color:white;
    padding:12px;
    transition:.3s;
}

.logout-btn:hover{
    background:#b91c1c;
}

        /* =======================
           CONTENT
        ======================== */

        .main{
            margin-left:270px;
            width:100%;
            min-height:100vh;
            padding:30px;
        }

        /* =======================
           NAVBAR
        ======================== */

        .topbar{
            background:white;
            border-radius:18px;
            padding:18px 25px;
            margin-bottom:30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 5px 20px rgba(0,0,0,.05);
        }

        .search-box{
            width:350px;
        }

        .search-box input{
            border-radius:50px;
        }

        .profile{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .profile img{
            width:45px;
            height:45px;
            border-radius:50%;
        }

    </style>

    @yield('css')

</head>

<body>

<div class="wrapper">

    {{-- Sidebar --}}
    @include('partials.sidebar')

    {{-- Main Content --}}
    <div class="main">

        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Content --}}
        @yield('content')

    </div>

</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 {{-- FOOTER --}}
    @include('partials.footer')


@yield('js')

</body>
</html>