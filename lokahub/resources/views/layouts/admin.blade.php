<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <nav>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.about.index') }}">Manage About</a></li>
                    <!-- Tambahkan menu lainnya -->
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <header>
                <h1>@yield('header')</h1>
                <a href="{{ route('logout') }}">Logout</a>
            </header>
            <section>
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>