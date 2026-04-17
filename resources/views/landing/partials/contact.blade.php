<!-- Contact Section -->
<section id="contact" class="py-24 bg-gradient-to-br from-gray-50 to-green-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-green-200 mb-6">
                <i class="bi bi-envelope-fill text-green-600"></i>
                <span class="text-green-700 text-sm font-medium">Contact Us</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
            <p class="text-gray-600">Have a project in mind? Let's discuss how we can help you achieve your technology goals.</p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Left - Contact Info -->
            <div data-aos="fade-right">
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <!-- Contact Illustration -->
                    <div class="mb-6 rounded-xl overflow-hidden">
                        <img src="{{ asset('illustration/flat-vector-business-consultation-editable-design_203633-8192.jpg') }}" alt="Business Consultation" class="w-full h-48 object-cover">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                                <i class="bi bi-geo-alt-fill text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Office Location</h4>
                                <p class="text-gray-600">Dar es Salaam, Tanzania</p>
                                <p class="text-gray-500 text-sm">Dubai, UAE (Regional Office)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center flex-shrink-0">
                                <i class="bi bi-envelope-fill text-yellow-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Email Address</h4>
                                <p class="text-gray-600">info@glovin.co.tz</p>
                                <p class="text-gray-500 text-sm">support@glovin.co.tz</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                                <i class="bi bi-telephone-fill text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Phone Number</h4>
                                <p class="text-gray-600">+255 718 637 328</p>
                                <p class="text-gray-500 text-sm">Mon-Fri, 8:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center flex-shrink-0">
                                <i class="bi bi-globe text-yellow-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Website</h4>
                                <p class="text-gray-600">www.glovin.co.tz</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="mt-8 pt-8 border-t border-gray-100">
                        <h4 class="font-semibold text-gray-900 mb-4">Follow Us</h4>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition-all">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right - Contact Form -->
            <div data-aos="fade-left">
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" name="name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="Your name" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="your@email.com" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" name="subject" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="How can we help?" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea name="message" rows="5" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all resize-none" placeholder="Tell us about your project..." required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all shadow-lg flex items-center justify-center gap-2">
                            <i class="bi bi-send-fill"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
