<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title','Admin Dashboard')
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <style>

        * {
            font-family:'Inter', 'Segoe UI', sans-serif;
        }

        body {
            background:#f4f6fa;
            color:#1e293b;
        }


        /* SIDEBAR */

        .sidebar {
            width:270px;
            min-height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:
            linear-gradient(
                180deg,
                #081a33,
                #0b1f3a
            );
            box-shadow:10px 0 30px rgba(0,0,0,.08);
            z-index:1000;
        }


        .brand {
            padding:28px 25px;
            border-bottom:1px solid rgba(255,255,255,.12);
        }


        .brand h4 {
            color:white;
            font-weight:700;
            letter-spacing:.3px;
            margin-bottom:5px;
        }


        .brand small {
            color:#94a3b8;
        }



        .sidebar-menu {
            padding:25px 12px;
        }


        .nav-link {

            display:flex;
            align-items:center;

            color:#cbd5e1;

            padding:13px 18px;

            margin-bottom:8px;

            border-radius:12px;

            font-size:15px;

            transition:.3s;

        }


        .nav-link i {

            font-size:18px;

        }



        .nav-link:hover,
        .nav-link.active {

            background:white;

            color:#0b1f3a;

            transform:translateX(5px);

            box-shadow:
            0 8px 20px rgba(0,0,0,.12);

        }



        /* CONTENT */

        .content {

            margin-left:270px;

            min-height:100vh;

        }



        .navbar-admin {

            height:75px;

            background:white;

            border-bottom:1px solid #e5e7eb;

            display:flex;

            align-items:center;

            justify-content:space-between;

            padding:0 35px;

            box-shadow:
            0 4px 15px rgba(0,0,0,.03);

        }



        .navbar-admin h5 {

            font-weight:700;

            color:#0f172a;

        }


        .admin-profile {

            display:flex;

            align-items:center;

            gap:12px;

        }



        .profile-icon {

            width:38px;

            height:38px;

            background:#0b1f3a;

            color:white;

            border-radius:50%;

            display:flex;

            align-items:center;

            justify-content:center;

        }



        .page-content {

            padding:35px;

        }



        /* CARD */

        .admin-card {

            background:white;

            border-radius:20px;

            border:1px solid #e5e7eb;

            box-shadow:
            0 15px 40px rgba(15,23,42,.05);

        }



        /* BUTTON */

        .btn-dark {

            background:#0b1f3a;

            border:none;

        }


        .btn-dark:hover {

            background:#16345f;

        }



        /* SCROLL */

        ::-webkit-scrollbar {

            width:8px;

        }


        ::-webkit-scrollbar-thumb {

            background:#cbd5e1;

            border-radius:10px;

        }


    </style>

</head>


<body>


<div class="sidebar">


    <div class="brand">

        <h4>
            Hyundai Admin
        </h4>

        <small>
            Vehicle Management System
        </small>

    </div>


    <ul class="nav flex-column sidebar-menu">


        <li>

            <a href="{{ route('admin.dashboard') }}"
               class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                <i class="bi bi-grid me-3"></i>

                Dashboard

            </a>

        </li>


        <li>

            <a href="{{ route('admin.kendaraan.index') }}"
               class="nav-link {{ request()->routeIs('admin.kendaraan.*') ? 'active' : '' }}">

                <i class="bi bi-car-front-fill me-3"></i>

                Kendaraan

            </a>

        </li>



        <li>

            <a href="{{ route('admin.booking.index') }}"
            class="nav-link {{ request()->routeIs('admin.booking.*') ? 'active' : '' }}">

                <i class="bi bi-calendar-check-fill me-3"></i>

                Test Drive

            </a>

        </li>



        <li>

            <a href="{{route('admin.simulasi.index')}}"
            class="nav-link">

            <i class="bi bi-calculator me-3"></i>

            Simulasi Kredit

            </a>

        </li>

        <li>

            <a href="{{route('admin.konsultasi.index')}}"
            class="nav-link">

            <i class="bi bi-chat-left-text me-3"></i>

            Konsultasi Kredit

            </a>

        </li>


    </ul>


</div>




<div class="content">


    <nav class="navbar-admin">


        <h5 class="mb-0">

            @yield('title','Dashboard')

        </h5>



    <div class="admin-profile">

        <div class="profile-icon">

            <i class="bi bi-person-fill"></i>

        </div>


        <div>

            <small class="text-muted d-block">
                Login as
            </small>

            <strong>
                {{ Auth::user()->name }}
            </strong>

        </div>


        <form action="{{ route('logout') }}" method="POST" class="ms-3">

            @csrf

            <button 
                type="submit"
                class="btn btn-outline-danger btn-sm">

                <i class="bi bi-box-arrow-right me-1"></i>

                Logout

            </button>


        </form>


    </div>


    </nav>




    <main class="page-content">


        @yield('content')


    </main>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>