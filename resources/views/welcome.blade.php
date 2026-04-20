<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đồ án Social Login - {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <style>
        @layer theme {
            :root {
                --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            }
        }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col font-sans">
    
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
        <nav class="flex items-center justify-end gap-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal transition-all">
                    Vào Dashboard
                </a>
            @endauth
        </nav>
    </header>

    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row shadow-2xl rounded-lg overflow-hidden">
            
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] border-r dark:border-[#3E3E3A]">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold mb-2 text-[#1b1b18] dark:text-white">Hệ thống Đăng nhập Social</h1>
                    <div class="space-y-1 text-[#706f6c] dark:text-[#A1A09A] text-sm">
                        <p>Họ tên: <span class="font-semibold text-orange-600 uppercase">Đặng Thị Quỳnh</span></p>
                        <p>Mã sinh viên: <span class="font-semibold text-orange-600">23810310156</span></p> <p>Lớp: <span class="font-semibold text-orange-600">D18CNPM2</span></p>
                        <p>Trường: <span class="font-semibold text-orange-600">Đại học Điện lực (EPU)</span></p>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <p class="font-medium text-gray-500 uppercase tracking-wider text-[11px]">Lựa chọn phương thức đăng nhập</p>
                    
                    <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-3 px-6 py-3 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md hover:bg-gray-50 dark:hover:bg-[#1f1f1e] transition-all group">
                        <svg width="20" height="20" viewBox="0 0 48 48">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Tiếp tục với Google</span>
                    </a>

                    <a href="{{ url('auth/facebook') }}" class="flex items-center justify-center gap-3 px-6 py-3 bg-[#1877f2] hover:bg-[#166fe5] rounded-md transition-all">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="text-sm font-semibold text-white">Tiếp tục với Facebook</span>
                    </a>
                </div>
            </div>

            <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative aspect-[335/376] lg:aspect-auto w-full lg:w-[400px] shrink-0 flex items-center justify-center">
                <div class="text-center p-8">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Laravel Logo" class="w-32 mx-auto mb-6 opacity-80">
                    <p class="text-[#F53003] font-bold text-xl tracking-widest uppercase">EPU Project</p>
            </div>

        </main>
    </div>

    <footer class="mt-8 text-[11px] text-gray-400 uppercase tracking-[2px]">
        &copy; 2026 Đặng Thị Quỳnh - Electric Power University
    </footer>

</body>
</html>