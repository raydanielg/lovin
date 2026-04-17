<!-- Header / Navigation -->
<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" :class="{ 'bg-white/95 backdrop-blur-md shadow-lg': scrolled, 'bg-transparent': !scrolled }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <img src="{{ asset('transparentslogo/tranp-green.png') }}" alt="Glovin Limited" class="h-12 w-auto">
                <div class="hidden sm:block">
                    <span class="text-xl font-bold" :class="{ 'text-green-800': scrolled, 'text-white': !scrolled }">Glovin</span>
                    <span class="text-xs block -mt-1" :class="{ 'text-green-600': scrolled, 'text-green-200': !scrolled }">Limited</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="#hero" class="text-sm font-medium transition-colors hover:text-yellow-500" :class="{ 'text-gray-700': scrolled, 'text-white': !scrolled }">Home</a>
                <a href="#about" class="text-sm font-medium transition-colors hover:text-yellow-500" :class="{ 'text-gray-700': scrolled, 'text-white': !scrolled }">About</a>
                <a href="#services" class="text-sm font-medium transition-colors hover:text-yellow-500" :class="{ 'text-gray-700': scrolled, 'text-white': !scrolled }">Services</a>
                <a href="#products" class="text-sm font-medium transition-colors hover:text-yellow-500" :class="{ 'text-gray-700': scrolled, 'text-white': !scrolled }">Products</a>
                <a href="#why-us" class="text-sm font-medium transition-colors hover:text-yellow-500" :class="{ 'text-gray-700': scrolled, 'text-white': !scrolled }">Why Us</a>
                <a href="#contact" class="text-sm font-medium transition-colors hover:text-yellow-500" :class="{ 'text-gray-700': scrolled, 'text-white': !scrolled }">Contact</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden lg:flex items-center gap-4">
                <a href="{{ route('login') }}" class="px-5 py-2.5 text-sm font-semibold rounded-lg border-2 transition-all" :class="{ 'border-green-600 text-green-700 hover:bg-green-600 hover:text-white': scrolled, 'border-white text-white hover:bg-white hover:text-green-800': !scrolled }">
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="px-5 py-2.5 text-sm font-semibold rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-600 text-white hover:from-yellow-600 hover:to-yellow-700 transition-all shadow-lg hover:shadow-xl">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-lg" :class="{ 'text-green-800': scrolled, 'text-white': !scrolled }">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition class="lg:hidden bg-white border-t shadow-lg">
        <div class="container mx-auto px-4 py-4 space-y-3">
            <a href="#hero" class="block py-2 text-gray-700 hover:text-green-600 font-medium">Home</a>
            <a href="#about" class="block py-2 text-gray-700 hover:text-green-600 font-medium">About</a>
            <a href="#services" class="block py-2 text-gray-700 hover:text-green-600 font-medium">Services</a>
            <a href="#products" class="block py-2 text-gray-700 hover:text-green-600 font-medium">Products</a>
            <a href="#why-us" class="block py-2 text-gray-700 hover:text-green-600 font-medium">Why Us</a>
            <a href="#contact" class="block py-2 text-gray-700 hover:text-green-600 font-medium">Contact</a>
            <div class="pt-4 flex flex-col gap-3">
                <a href="{{ route('login') }}" class="text-center py-2.5 rounded-lg border-2 border-green-600 text-green-700 font-semibold">Sign In</a>
                <a href="{{ route('register') }}" class="text-center py-2.5 rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-semibold">Get Started</a>
            </div>
        </div>
    </div>
</header>
