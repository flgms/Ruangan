<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - MyBini</title>
    <!-- Tailwind via CDN (biar gampang diedit) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f53003',
                        dark: '#1b1b18',
                        light: '#fdfdfc'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-light text-dark min-h-screen flex items-center justify-center p-4">
    <div class="text-center max-w-lg w-full">
        <h1 class="text-3xl font-bold mb-4">Selamat Datang di MyBini!</h1>
        <p class="mb-6 text-gray-600">Project Laravel kamu sudah siap.</p>

        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-block px-4 py-2 bg-primary text-white rounded hover:bg-red-700">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-block px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-block px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="mt-10 text-sm text-gray-500">
            <p>Kamu bisa mulai edit file ini di:</p>
            <code class="bg-gray-100 px-2 py-1 rounded">resources/views/welcome.blade.php</code>
        </div>
    </div>
</body>
</html>