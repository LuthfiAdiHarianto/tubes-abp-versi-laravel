<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>
        <style>
            body { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; margin: 0; padding: 2rem; background: #f7f7f7; color: #111; }
            .container { max-width: 900px; margin: 0 auto; background: #fff; border-radius: 16px; box-shadow: 0 20px 50px rgba(0,0,0,.08); padding: 2rem; }
            h1 { margin-top: 0; font-size: 2rem; }
            p { color: #444; line-height: 1.6; }
            ul { padding-left: 1.25rem; }
            li { margin-bottom: .5rem; }
            .meta { margin-top: 1.5rem; padding: 1rem; background: #f2f2f2; border-radius: 12px; }
            a { color: #1d4ed8; text-decoration: none; }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="{{ asset('images/background.jpeg') }}" alt="Header Image" class="img-content">
            <h1>{{ $title }}</h1>
            <p>{{ $description }}</p>

            <div class="meta">
                <h2>Route mapping</h2>
                <ul>
                    <li><strong>/</strong> - Home</li>
                    <li><strong>/about</strong> - About</li>
                    <li><strong>/project</strong> - Project</li>
                    <li><strong>/contact</strong> - Contact</li>
                    <li><strong>/auth/login</strong> - Login</li>
                    <li><strong>/auth/signup</strong> - Signup</li>
                    <li><strong>/auth/forgot-password</strong> - Forgot Password</li>
                    <li><strong>/auth/reset-password</strong> - Reset Password</li>
                    <li><strong>/auth/callback</strong> - Auth Callback</li>
                    <li><strong>/user/profile</strong> - User Profile</li>
                    <li><strong>/user/orders</strong> - User Orders</li>
                    <li><strong>/admin</strong> - Admin Dashboard</li>
                    <li><strong>/admin/laporan</strong> - Admin Laporan</li>
                    <li><strong>/admin/notifikasi</strong> - Admin Notifikasi</li>
                    <li><strong>/admin/paket</strong> - Admin Paket</li>
                    <li><strong>/admin/pesanan</strong> - Admin Pesanan</li>
                    <li><strong>/admin/pesanan/{id}</strong> - Admin Pesanan Detail</li>
                    <li><strong>/admin/setting</strong> - Admin Setting</li>
                </ul>
                <h3>API endpoints</h3>
                <ul>
                    <li><strong>POST /api/chat</strong> - Chat bot service</li>
                    <li><strong>POST /api/orders</strong> - Order submission</li>
                </ul>
            </div>
        </div>
    </body>
</html>
