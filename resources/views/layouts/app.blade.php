<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Lowongan Pekerjaan')</title>

    <!-- Tambahkan link ke CSS jika ada -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Contoh CSS sederhana */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .navbar a {
            color: #fff;
            margin: 0 1rem;
            text-decoration: none;
        }
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: #fff;
            margin-top: 2rem;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }
        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('applications.index') }}">Daftar Lamaran Pekerjaan</a>
        <a href="{{ route('jobs.index') }}">Daftar Lowongan Pekerjaan</a>
    </div>

    <!-- Konten Utama -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; {{ date('Y') }} Aplikasi Lowongan Pekerjaan. All rights reserved.
    </div>

    <!-- Tambahkan link ke JavaScript jika ada -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
