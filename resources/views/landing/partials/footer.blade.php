<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <!-- Main Footer -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('transparentslogo/tranp-green.png') }}" alt="Glovin" class="h-12 w-auto">
                    <div>
                        <span class="text-xl font-bold">Glovin</span>
                        <span class="text-xs block text-gray-400">Limited</span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Delivering secure, scalable, and intelligent digital solutions across Africa. Transforming businesses through innovative technology.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-9 h-9 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-green-600 hover:text-white transition-all">
                        <i class="bi bi-linkedin text-sm"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-green-600 hover:text-white transition-all">
                        <i class="bi bi-twitter-x text-sm"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-green-600 hover:text-white transition-all">
                        <i class="bi bi-facebook text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#about" class="text-gray-400 hover:text-green-400 transition-colors text-sm">About Us</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Services</a></li>
                    <li><a href="#products" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Products</a></li>
                    <li><a href="#case-studies" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Case Studies</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Contact</a></li>
                </ul>
            </div>
            
            <!-- Solutions -->
            <div>
                <h4 class="text-lg font-bold mb-6">Solutions</h4>
                <ul class="space-y-3">
                    <li><a href="#services" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Healthcare Solutions</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Banking & Finance</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-green-400 transition-colors text-sm">Cybersecurity</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-green-400 transition-colors text-sm">ICT Infrastructure</a></li>
                    <li><a href="#products" class="text-gray-400 hover:text-green-400 transition-colors text-sm">CCIP Platform</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-bold mb-6">Contact</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="bi bi-geo-alt-fill text-green-400 mt-1"></i>
                        <span class="text-gray-400 text-sm">Dar es Salaam, Tanzania</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-envelope-fill text-green-400 mt-1"></i>
                        <a href="mailto:info@glovin.co.tz" class="text-gray-400 hover:text-green-400 transition-colors text-sm">info@glovin.co.tz</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-telephone-fill text-green-400 mt-1"></i>
                        <a href="tel:+255718637328" class="text-gray-400 hover:text-green-400 transition-colors text-sm">+255 718 637 328</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-globe text-green-400 mt-1"></i>
                        <a href="https://www.glovin.co.tz" class="text-gray-400 hover:text-green-400 transition-colors text-sm">www.glovin.co.tz</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">
                    © {{ date('Y') }} Glovin Limited. All rights reserved.
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-500 hover:text-green-400 transition-colors text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-green-400 transition-colors text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-500 hover:text-green-400 transition-colors text-sm">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
