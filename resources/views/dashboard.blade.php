<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sinh viên EPU</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 dark:bg-zinc-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700">
        <div class="p-6">
            <div class="flex flex-col items-center">
                <img class="w-24 h-24 rounded-full border-4 border-orange-500 mb-4" 
                     src="{{ Auth::user()->avatar ?? 'https://via.placeholder.com/150' }}" 
                     alt="Avatar">
                
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-1">
                    {{ Auth::user()->name }}
                </h2>
                <p class="text-orange-600 font-semibold mb-4">Sinh viên Công nghệ thông tin</p>
                
                <div class="w-full space-y-3 border-t border-gray-100 dark:border-zinc-700 pt-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Mã sinh viên:</span>
                        <span class="font-mono font-bold text-gray-800 dark:text-gray-200 uppercase">
                            23810310156
                        </span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Email:</span>
                        <span class="text-gray-800 dark:text-gray-200">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">Nền tảng:</span>
                        <span class="capitalize text-blue-500 font-medium">{{ Auth::user()->provider }}</span>
                    </div>
                </div>

                <form action="{{ route('logout') }}" method="POST" class="w-full mt-6">
                    @csrf
                    <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                        Đăng xuất
                    </button>
                </form>
            </div>
        </div>
        <div class="bg-gray-50 dark:bg-zinc-700/50 px-6 py-3 text-center">
            <span class="text-xs text-gray-400 uppercase tracking-widest">Electric Power University</span>
        </div>
    </div>
</body>
</html>