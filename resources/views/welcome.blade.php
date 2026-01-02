<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dirke Coffee | Artisanal Brews</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .coffee-gradient {
            background: linear-gradient(rgba(75, 44, 32, 0.8), rgba(75, 44, 32, 0.9)), 
                        url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }
        .btn-emerald {
            background-color: #4E8D7C;
            transition: all 0.3s ease;
        }
        .btn-emerald:hover {
            background-color: #3d6e61;
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-[#FDF8F5] text-[#4B2C20] antialiased">

    <!-- Navigation -->
    <nav class="absolute top-0 w-full z-50 px-6 py-8">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-extrabold tracking-tighter">
                DIRKE<span class="text-amber-400">.</span>COFFEE
            </div>
            
            <div class="space-x-8 text-white/90 font-semibold text-sm hidden md:flex uppercase tracking-widest">
                <a href="#" class="hover:text-amber-400 transition">Menu</a>
                <a href="#" class="hover:text-amber-400 transition">Our Story</a>
                <a href="#" class="hover:text-amber-400 transition">Locations</a>
            </div>

            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white text-sm font-bold border border-white/30 px-6 py-2 rounded-full hover:bg-white hover:text-brown-900 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white text-sm font-bold">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-emerald text-white text-sm font-bold px-6 py-2 rounded-full shadow-lg">Sign Up</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="coffee-gradient min-h-screen flex items-center relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 pt-20 relative z-10 w-full">
            <div class="md:w-2/3 lg:w-1/2">
                <span class="text-amber-400 font-bold tracking-[0.3em] uppercase text-xs mb-4 block">Premium Coffee Experience</span>
                <h1 class="text-white text-6xl md:text-8xl font-serif leading-tight mb-8">
                    Brewed with <br> <span class="italic text-amber-200">Passion.</span>
                </h1>
                <p class="text-white/80 text-lg mb-10 max-w-md leading-relaxed">
                    Discover the art of artisanal roasting. We bring the finest beans from around the world straight to your cup.
                </p>
                
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="btn-emerald text-white font-bold px-10 py-4 rounded-full text-center shadow-2xl">
                        Order Now
                    </a>
                    <a href="#" class="bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold px-10 py-4 rounded-full text-center hover:bg-white/20 transition">
                        Explore Menu
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Element -->
        <div class="absolute bottom-[-10%] right-[-5%] opacity-20 hidden lg:block">
            <img src="https://www.pngmart.com/files/1/Coffee-Beans-PNG-Transparent-Image.png" class="w-[600px] rotate-12">
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="space-y-4">
                    <div class="text-3xl">🌱</div>
                    <h3 class="text-xl font-bold">Ethically Sourced</h3>
                    <p class="text-gray-600 leading-relaxed">We work directly with local farmers to ensure sustainable and fair practices in every bean.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-3xl">🔥</div>
                    <h3 class="text-xl font-bold">Master Roasting</h3>
                    <p class="text-gray-600 leading-relaxed">Our beans are roasted in small batches to lock in unique flavor profiles and rich aromas.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-3xl">☕</div>
                    <h3 class="text-xl font-bold">Expert Baristas</h3>
                    <p class="text-gray-600 leading-relaxed">Every cup is a masterpiece, crafted with precision and the perfect milk temperature.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-gray-200 py-12 px-6 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col md:row justify-between items-center opacity-60">
            <p class="text-sm font-medium">© {{ date('Y') }} Dirke Coffee. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-sm hover:text-emerald-600">Instagram</a>
                <a href="#" class="text-sm hover:text-emerald-600">Twitter</a>
                <a href="#" class="text-sm hover:text-emerald-600">Privacy Policy</a>
            </div>
        </div>
    </footer>

</body>
</html>