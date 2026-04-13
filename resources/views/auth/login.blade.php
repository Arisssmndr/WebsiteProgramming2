<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenderWonders - Join Us</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #E2E8F0; /* Latar belakang abu-abu seperti di gambar */
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="antialiased flex items-center justify-center min-h-screen p-4 sm:p-8">

    <!-- Kontainer Utama (Dikecilkan ukurannya agar lebih proporsional) -->
    <div class="bg-white w-full max-w-[950px] min-h-[600px] rounded-[40px] shadow-2xl overflow-hidden flex flex-col md:flex-row p-5 gap-5">

        <!-- KOLOM KIRI: Form Area -->
        <div class="w-full md:w-1/2 flex flex-col justify-between p-4 md:p-6">

            <div>
                <!-- Logo -->
                <div class="mb-10">
                    <h1 class="text-lg font-bold text-gray-800">RenderWonders</h1>
                </div>

                <!-- Greeting -->
                <div class="mb-6">
                    <h2 class="text-3xl font-semibold text-gray-900 leading-tight">Welcome to</h2>
                    <h2 class="text-3xl font-semibold text-gray-900 leading-tight mb-3">RenderWonders</h2>
                    <p class="text-gray-400 text-xs max-w-xs leading-relaxed">
                        Gaze and attention modeling powered by AI is optimizing virtual reality experiences
                    </p>
                </div>

                <!-- Alert Gagal Login (Laravel Errors) -->
                @if ($errors->any())
                <div class="mb-5 p-3 bg-red-50 border border-red-100 rounded-2xl flex items-center gap-2">
                    <div class="bg-red-500 text-white rounded-full w-4 h-4 flex items-center justify-center text-[8px]">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <span class="text-red-600 text-xs font-medium">{{ $errors->first() }}</span>
                </div>
                @endif

                <!-- Form Login -->
                <form action="/proseslogin" method="POST" class="space-y-3.5">
                    @csrf

                    <!-- Input Email -->
                    <div class="relative group">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-cyan-500">
                            <i class="fa-regular fa-envelope text-base"></i>
                        </div>
                        <input type="email" name="email" required placeholder="hello@hatypo.studio"
                            class="w-full pl-11 pr-4 py-3 bg-white border border-gray-200 rounded-full text-xs focus:outline-none focus:ring-2 focus:ring-cyan-500/20 focus:border-cyan-500 transition-all placeholder-gray-300 shadow-sm">
                    </div>

                    <!-- Input Password -->
                    <div class="relative group">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <i class="fa-solid fa-lock text-base"></i>
                        </div>
                        <input type="password" name="password" required id="password" placeholder="Password"
                            class="w-full pl-11 pr-11 py-3 bg-white border border-gray-200 rounded-full text-xs focus:outline-none focus:ring-2 focus:ring-cyan-500/20 focus:border-cyan-500 transition-all placeholder-gray-300 shadow-sm">
                        <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-300 hover:text-gray-500 transition-colors">
                            <i class="fa-regular fa-eye text-sm"></i>
                        </button>
                    </div>

                    <!-- Button Sign Up (Primary) -->
                    <button type="submit" class="w-full bg-[#14B8D6] hover:bg-[#0EA5E9] text-white font-medium py-3 rounded-full transition-all duration-300 shadow-lg shadow-cyan-100 mt-1 text-sm">
                        Sign up
                    </button>

                    <!-- Divider -->
                    <div class="relative flex items-center py-1">
                        <div class="flex-grow border-t border-gray-100"></div>
                        <span class="flex-shrink mx-3 text-gray-300 text-[9px] uppercase font-bold tracking-widest">or</span>
                        <div class="flex-grow border-t border-gray-100"></div>
                    </div>

                    <!-- Google Sign up -->
                    <button type="button" class="w-full bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-3 rounded-full transition-all duration-300 flex items-center justify-center gap-2 shadow-sm text-sm">
                        <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" class="w-4 h-4" alt="Google">
                        Sign up with Google
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-xs text-gray-500">
                        Already have an account? <a href="#" class="text-cyan-500 font-semibold hover:underline">Login</a>
                    </p>
                </div>
            </div>

            <!-- Footer Section (User counter) -->
            <div class="mt-8 p-3 bg-gray-50 rounded-[24px] flex items-center justify-between border border-gray-100">
                <div class="flex items-center gap-2">
                    <div class="flex -space-x-2.5">
                        <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://i.pravatar.cc/150?u=1" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://i.pravatar.cc/150?u=2" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://i.pravatar.cc/150?u=3" alt="">
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-900">Join with 20k+ Users!</p>
                        <p class="text-[9px] text-gray-400">Let's see our happy customer</p>
                    </div>
                </div>
                <button class="w-9 h-9 bg-white rounded-full shadow-sm flex items-center justify-center text-gray-800 hover:bg-gray-100 transition-all">
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                </button>
            </div>
        </div>

        <!-- KOLOM KANAN: Visual Area -->
        <div class="hidden md:block w-1/2 relative">
            <div class="h-full w-full rounded-[30px] overflow-hidden relative bg-[#97C2D0]">
                <!-- Background Image Sim -->
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1633356122544-f134324a6cee?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center mix-blend-overlay opacity-40"></div>

                <!-- Overlay Content -->
                <div class="relative h-full flex flex-col justify-between p-8 z-10">
                    <h3 class="text-white text-2xl font-medium leading-tight max-w-[250px]">
                        AI Revolutionizing the way we create, render, and experience content.
                    </h3>

                    <!-- Bottom Glass Box -->
                    <div class="glass-card rounded-[20px] p-5 text-white border border-white/20">
                        <div class="flex items-center justify-between mb-6">
                             <div class="flex items-center gap-2">
                                <div class="w-10 h-10 rounded-full border border-white/40 flex items-center justify-center overflow-hidden">
                                     <div class="w-6 h-6 rounded-full border-2 border-white/60"></div>
                                </div>
                                <div class="px-4 py-1.5 rounded-full border border-white/40 text-[11px] font-medium">
                                    Creating
                                </div>
                             </div>
                             <div class="flex gap-1.5">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center border border-white/20 opacity-40">
                                    <i class="fa-solid fa-arrow-down text-[10px]"></i>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center border border-white/30">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                </div>
                             </div>
                        </div>
                        <p class="text-xs text-white/90 leading-relaxed font-light">
                            Create design brief with AI voice command to make awesome 3d images that suits your needs.
                        </p>
                    </div>
                </div>

                <!-- Abstract Shape Mockup -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 border-[15px] border-white/10 rounded-lg rotate-12"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/3 -translate-y-1/3 w-36 h-36 bg-white/10 backdrop-blur-md rounded-lg -rotate-12 border border-white/20"></div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = event.currentTarget.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
