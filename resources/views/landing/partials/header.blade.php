<!-- Header / Navigation -->
<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" :class="{ 'bg-white/95 backdrop-blur-xl shadow-xl': scrolled, 'bg-transparent': !scrolled }" x-data="{ activeDropdown: null }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 group">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-yellow-400 rounded-full blur opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
                    <img src="{{ asset('transparentslogo/GLOVIN-06.svg') }}" alt="G" class="h-10 w-auto relative z-10 transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 drop-shadow-lg">
                </div>
                <div class="flex items-baseline">
                    <span class="text-2xl font-extrabold tracking-tight" :class="{ 'text-green-700': scrolled, 'text-white': !scrolled }">G</span>
                    <span class="text-2xl font-bold tracking-wide" :class="{ 'text-gray-800': scrolled, 'text-white/90': !scrolled }">lovin</span>
                    <span class="ml-1 text-[10px] font-semibold uppercase tracking-wider px-1.5 py-0.5 rounded" :class="{ 'bg-green-600 text-white': scrolled, 'bg-yellow-400 text-green-900': !scrolled }">Ltd</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-1">
                <a href="/" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Home</a>
                
                <!-- About Dropdown -->
                <div class="relative" @mouseenter="activeDropdown = 'about'" @mouseleave="activeDropdown = null">
                    <a href="/about" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105 flex items-center gap-1" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">
                        About Us
                        <i class="ri-arrow-down-s-line text-xs transition-transform duration-300" :class="{ 'rotate-180': activeDropdown === 'about' }"></i>
                    </a>
                    <div x-show="activeDropdown === 'about'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2" class="absolute top-full left-0 mt-2 w-64 bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden py-2">
                        <a href="/about" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">About Glovin</a>
                        <a href="/about#vision-mission" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Vision & Mission</a>
                        <a href="/about#values" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Core Values</a>
                        <a href="/about#team" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Our Team</a>
                        <a href="/about#why-choose-us" class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Why Choose Us</a>
                    </div>
                </div>
                
                <a href="/solutions" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Solutions</a>
                <a href="/industries" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Industries</a>
                <a href="/products" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Products</a>
                <a href="/projects" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Projects</a>
                <a href="/blog" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Insights</a>
                <a href="/careers" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Careers</a>
                <a href="/contact" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105" :class="{ 'text-gray-700 hover:text-green-600 hover:bg-green-50': scrolled, 'text-white hover:text-yellow-300 hover:bg-white/10': !scrolled }">Contact Us</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="/consultation" class="px-4 py-2 text-sm font-medium text-green-600 hover:text-green-700 transition-colors" :class="{ 'text-green-600': scrolled, 'text-white hover:text-yellow-300': !scrolled }">
                    <i class="ri-calendar-check-line mr-1"></i>Book Consultation
                </a>
                <a href="/demo" class="group px-6 py-2.5 text-sm font-bold rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-green-900 hover:from-yellow-300 hover:to-yellow-400 transition-all shadow-lg hover:shadow-yellow-400/50 flex items-center gap-2 transform hover:scale-105">
                    <span>Get Started</span>
                    <i class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-lg" :class="{ 'text-green-800': scrolled, 'text-white': !scrolled }">
                <i class="ri-menu-line text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="lg:hidden bg-white border-t shadow-2xl max-h-[80vh] overflow-y-auto">
        <div class="container mx-auto px-4 py-6 space-y-2">
            <a href="/" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Home</a>
            <a href="/about" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">About Us</a>
            <a href="/solutions" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Solutions</a>
            <a href="/industries" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Industries</a>
            <a href="/products" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Products</a>
            <a href="/projects" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Projects / Case Studies</a>
            <a href="/blog" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Insights / Blog</a>
            <a href="/careers" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Careers</a>
            <a href="/contact" class="block py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg font-medium transition-all">Contact Us</a>
            <div class="pt-4 px-4 space-y-3">
                <a href="/consultation" class="block text-center py-3 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold">
                    <i class="ri-calendar-check-line mr-2"></i>Book Consultation
                </a>
                <a href="/demo" class="block text-center py-3 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-green-900 font-bold">
                    Get Started / Request Demo
                </a>
            </div>
        </div>
    </div>
</header>
