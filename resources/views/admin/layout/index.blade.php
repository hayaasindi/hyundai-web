<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Admin Dashboard')
    </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>


<div class="d-flex">


    <!-- Sidebar -->
    <div class="bg-dark text-white p-3 vh-100" style="width:250px;">

        <h4 class="mb-4">
            Admin Panel
        </h4>


        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" 
                   class="nav-link text-white">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-people"></i>
                    Users
                </a>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-gear"></i>
                    Settings
                </a>
            </li>


        </ul>


    </div>



    <!-- Content -->
    <div class="flex-grow-1">


        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light px-4">

            <span class="navbar-brand">
                Dashboard
            </span>


            <div>
                Admin
            </div>

        </nav>


        <main class="p-4">

            @yield('content')

        </main>


    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>