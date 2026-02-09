<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Lost in Digital Void</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); } 
        }

        .animate-float { animation: float 4s ease-in-out infinite; }
        .bg-void { background: radial-gradient(circle, #1a202c 0%, #0a0c10 100%); }
    </style>
</head>
<body class="bg-void text-white h-screen flex items-center justify-center overflow-hidden">

    <div class="text-center px-4">
        <h1 class="text-9xl font-extrabold tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-600 animate-float">
            404
        </h1>

        <div class="bg-cyan-500 px-2 text-sm rounded rotate-12 absolute">
            Page Not Found
        </div>

        <div class="mt-8">
            <h2 class="text-2xl md:text-4xl font-bold mb-4">Oops! Kamu Terjebak di Digital Void.</h2>
            <p class="text-gray-400 mb-10 max-w-md mx-auto">
                Halaman yang kamu cari mungkin sudah terhapus, pindah alamat, atau memang tidak pernah ada sejak awal.
            </p>

            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="/" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 rounded-full font-bold transition-all transform hover:scale-105 shadow-lg shadow-orange-500/20">
                    KEMBALI KE HOME
                </a>
                <a href="https://wa.me/081312305571" class="px-8 py-3 border border-gray-600 hover:border-cyan-400 hover:text-cyan-400 rounded-full font-bold transition-all">
                    HUBUNGI SUPPORT
                </a>
            </div>
        </div>
    </div>
    <div class="absolute top-10 left-10 w-2 h-2 bg-cyan-500 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute bottom-20 right-20 w-3 h-3 bg-purple-500 rounded-full opacity-20 animate-pulse delay-700"></div>
    <div class="absolute top-1/2 left-20 w-1 h-1 bg-white rounded-full opacity-10"></div>
</body>
</html>
