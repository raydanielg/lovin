<!-- FAQ Section -->
<section id="faq" class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Left - Header -->
            <div data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-50 border border-yellow-200 mb-6">
                    <i class="bi bi-question-circle text-yellow-600"></i>
                    <span class="text-yellow-700 text-sm font-medium">FAQ</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                    Frequently Asked <br>
                    <span class="text-green-600">Questions</span>
                </h2>
                <p class="text-gray-600 text-lg mb-8">
                    Find answers to common questions about our services, solutions, and how we can help transform your business.
                </p>
                <div class="p-6 rounded-2xl bg-gradient-to-br from-green-50 to-yellow-50 border border-green-100">
                    <h4 class="font-bold text-gray-900 mb-2">Still have questions?</h4>
                    <p class="text-gray-600 text-sm mb-4">Can't find the answer you're looking for? Please chat with our friendly team.</p>
                    <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-all">
                        <i class="bi bi-envelope"></i>
                        Contact Us
                    </a>
                </div>
            </div>
            
            <!-- Right - FAQ Accordion -->
            <div class="space-y-4" data-aos="fade-left">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900">What industries does Glovin serve?</span>
                        <i class="bi bi-chevron-down text-gray-400 transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">We serve a wide range of industries including Government, Healthcare, Banking & Finance, Telecommunications, Manufacturing, Retail, Education, and Logistics. Our solutions are tailored to meet the specific needs of each sector.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900">How long does a typical implementation take?</span>
                        <i class="bi bi-chevron-down text-gray-400 transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Implementation timelines vary based on project scope and complexity. Simple solutions may take 4-8 weeks, while enterprise-wide deployments can take 3-6 months. We provide detailed timelines during the planning phase.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900">Do you provide ongoing support after deployment?</span>
                        <i class="bi bi-chevron-down text-gray-400 transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Yes, we offer comprehensive 24/7 support and maintenance services. This includes technical support, system updates, security patches, and continuous monitoring. We also provide training for your team.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900">Is your CCIP platform customizable?</span>
                        <i class="bi bi-chevron-down text-gray-400 transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Absolutely. Our Centralized Credit Intelligence Platform (CCIP) is highly customizable to meet the specific requirements of different financial institutions. We can adapt scoring models, reporting formats, and integration points.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900">What security measures do you implement?</span>
                        <i class="bi bi-chevron-down text-gray-400 transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Security is at the core of everything we do. We implement end-to-end encryption, multi-factor authentication, regular security audits, penetration testing, and compliance with international standards including ISO 27001.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors">
                        <span class="font-semibold text-gray-900">Can your solutions integrate with existing systems?</span>
                        <i class="bi bi-chevron-down text-gray-400 transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Yes, our solutions are designed with advanced integration capabilities. We support APIs, web services, and custom connectors to ensure seamless integration with your existing systems and third-party applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
