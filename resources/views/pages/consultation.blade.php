<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedule Consultation - Glovin Limited</title>
    <meta name="description" content="Schedule a free consultation with Glovin Limited. Get expert advice on digital transformation, cybersecurity, cloud solutions, and more.">
    <link rel="icon" type="image/png" href="{{ asset('transparentslogo/tranp-green.png') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- RemixIcon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Flatpickr for date picker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        glovin: {
                            green: '#166534',
                            'green-light': '#22c55e',
                            yellow: '#eab308',
                            'yellow-light': '#facc15',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        * { font-family: 'Inter', sans-serif; }
        html { scroll-behavior: smooth; }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #f0fdf4; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(to bottom, #16a34a, #eab308); border-radius: 5px; }
        
        /* Loading Spinner */
        .loader-container {
            position: fixed;
            inset: 0;
            background: rgba(22, 101, 52, 0.95);
            backdrop-filter: blur(10px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .loader-container.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        
        .spinner {
            width: 80px;
            height: 80px;
            position: relative;
        }
        
        .spinner-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 4px solid transparent;
            border-top-color: #eab308;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        .spinner-ring:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 10px;
            left: 10px;
            border-top-color: #22c55e;
            animation-direction: reverse;
            animation-duration: 1.5s;
        }
        
        .spinner-ring:nth-child(3) {
            width: 40px;
            height: 40px;
            top: 20px;
            left: 20px;
            border-top-color: #ffffff;
            animation-duration: 2s;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .loading-text {
            color: white;
            margin-top: 24px;
            font-size: 18px;
            font-weight: 500;
        }
        
        .loading-dots::after {
            content: '';
            animation: dots 1.5s infinite;
        }
        
        @keyframes dots {
            0%, 20% { content: '.'; }
            40% { content: '..'; }
            60%, 100% { content: '...'; }
        }
        
        /* Form Animations */
        .form-step {
            display: none;
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .form-step.active {
            display: block;
            opacity: 1;
            transform: translateX(0);
        }
        
        .form-step.prev {
            transform: translateX(-50px);
        }
        
        /* Input Focus Effects */
        .input-group {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .input-group:focus-within {
            transform: translateY(-2px);
        }
        
        .input-group:focus-within .input-icon {
            color: #16a34a;
            transform: scale(1.1);
        }
        
        .input-icon {
            transition: all 0.3s ease;
        }
        
        /* Floating Label */
        .floating-input {
            transition: all 0.3s ease;
        }
        
        .floating-input:focus {
            box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.1);
        }
        
        /* Progress Bar */
        .progress-bar {
            height: 6px;
            background: #e5e7eb;
            border-radius: 3px;
            overflow: hidden;
            position: relative;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #16a34a, #eab308);
            border-radius: 3px;
            transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shimmer 1.5s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        /* Step Indicators */
        .step-indicator {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .step-indicator.active {
            background: linear-gradient(135deg, #16a34a, #eab308);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(22, 163, 74, 0.4);
        }
        
        .step-indicator.completed {
            background: #16a34a;
            color: white;
        }
        
        .step-indicator.pending {
            background: #e5e7eb;
            color: #9ca3af;
        }
        
        /* Card Selection */
        .service-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .service-card.selected {
            border-color: #16a34a;
            background: linear-gradient(135deg, #f0fdf4, #fefce8);
            box-shadow: 0 4px 20px rgba(22, 163, 74, 0.2);
        }
        
        .service-card.selected .check-icon {
            opacity: 1;
            transform: scale(1);
        }
        
        .check-icon {
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }
        
        /* Success Animation */
        .success-checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, #16a34a, #22c55e);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            animation: scaleIn 0.5s ease;
        }
        
        @keyframes scaleIn {
            0% { transform: scale(0); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .success-checkmark i {
            font-size: 50px;
            color: white;
            animation: checkmark 0.5s ease 0.3s both;
        }
        
        @keyframes checkmark {
            0% { transform: scale(0) rotate(-45deg); }
            100% { transform: scale(1) rotate(0); }
        }
        
        /* Confetti Animation */
        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            pointer-events: none;
            z-index: 9998;
        }
        
        /* Floating Shapes */
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float-shape 20s infinite ease-in-out;
        }
        
        @keyframes float-shape {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(50px, -50px) rotate(90deg); }
            50% { transform: translate(0, -100px) rotate(180deg); }
            75% { transform: translate(-50px, -50px) rotate(270deg); }
        }
        
        /* Input Validation Styles */
        .input-valid {
            border-color: #22c55e !important;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%2322c55e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 20px;
        }
        
        .input-invalid {
            border-color: #ef4444 !important;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23ef4444' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='12' r='10'%3E%3C/circle%3E%3Cline x1='15' y1='9' x2='9' y2='15'%3E%3C/line%3E%3Cline x1='9' y1='9' x2='15' y2='15'%3E%3C/line%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 20px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 via-white to-yellow-50 min-h-screen" x-data="consultationForm()">
    
    <!-- Loading Overlay -->
    <div id="loading-overlay" class="loader-container" :class="{ 'hidden': !loading }">
        <div class="spinner">
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
        </div>
        <div class="loading-text">
            <span x-text="loadingText"></span>
            <span class="loading-dots"></span>
        </div>
    </div>
    
    @include('landing.partials.header')
    
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-br from-green-900 via-green-800 to-green-900 relative overflow-hidden">
        <!-- Floating Shapes -->
        <div class="floating-shape w-64 h-64 bg-yellow-400 top-20 left-10" style="animation-delay: 0s;"></div>
        <div class="floating-shape w-48 h-48 bg-green-400 top-40 right-20" style="animation-delay: 5s;"></div>
        <div class="floating-shape w-32 h-32 bg-white bottom-20 left-1/4" style="animation-delay: 10s;"></div>
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <i class="ri-calendar-check-line text-yellow-400"></i>
                    <span class="text-yellow-300 text-sm font-medium">Free Expert Consultation</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4">
                    Schedule Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">Consultation</span>
                </h1>
                
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Let's discuss how Glovin can help transform your business with cutting-edge technology solutions.
                </p>
                
                <div class="mt-8 flex flex-wrap items-center justify-center gap-6 text-sm text-gray-400">
                    <span class="flex items-center gap-2">
                        <i class="ri-time-line text-yellow-400"></i>
                        30 Minutes
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="ri-video-chat-line text-yellow-400"></i>
                        Video Call
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="ri-gift-line text-yellow-400"></i>
                        Free of Charge
                    </span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Form Section -->
    <section class="py-16 -mt-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                
                <!-- Form Container -->
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    
                    <!-- Progress Header -->
                    <div class="bg-gradient-to-r from-green-50 to-yellow-50 p-6 border-b border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-bold text-gray-900">Consultation Request</h2>
                            <span class="text-sm text-gray-500">Step <span x-text="currentStep"></span> of <span x-text="totalSteps"></span></span>
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="progress-bar mb-6">
                            <div class="progress-fill" :style="`width: ${(currentStep / totalSteps) * 100}%`"></div>
                        </div>
                        
                        <!-- Step Indicators -->
                        <div class="flex items-center justify-between">
                            <template x-for="(step, index) in steps" :key="index">
                                <div class="flex items-center" :class="{ 'flex-1': index < steps.length - 1 }">
                                    <div class="step-indicator"
                                         :class="{
                                             'active': currentStep === index + 1,
                                             'completed': currentStep > index + 1,
                                             'pending': currentStep < index + 1
                                         }">
                                        <i x-show="currentStep > index + 1" class="fas fa-check"></i>
                                        <span x-show="currentStep <= index + 1" x-text="index + 1"></span>
                                    </div>
                                    <div x-show="index < steps.length - 1" class="flex-1 h-1 mx-2 rounded-full transition-all duration-300"
                                         :class="currentStep > index + 1 ? 'bg-green-500' : 'bg-gray-200'"></div>
                                </div>
                            </template>
                        </div>
                        
                        <!-- Step Labels -->
                        <div class="flex justify-between mt-2 text-xs">
                            <span class="text-gray-600">Personal Info</span>
                            <span class="text-gray-600">Company</span>
                            <span class="text-gray-600">Service</span>
                            <span class="text-gray-600">Schedule</span>
                        </div>
                    </div>
                    
                    <!-- Form Content -->
                    <div class="p-6 lg:p-10">
                        
                        <form @submit.prevent="submitForm" id="consultation-form">
                            
                            <!-- Step 1: Personal Information -->
                            <div class="form-step" :class="{ 'active': currentStep === 1 }">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Personal Information</h3>
                                <p class="text-gray-600 mb-8">Tell us about yourself so we can personalize your consultation.</p>
                                
                                <div class="grid md:grid-cols-2 gap-6">
                                    <!-- First Name -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="ri-user-line"></i>
                                            </span>
                                            <input type="text" 
                                                   name="first_name" 
                                                   x-model="form.first_name"
                                                   @blur="validateField('first_name')"
                                                   :class="{ 'input-valid': validation.first_name === true, 'input-invalid': validation.first_name === false }"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="John"
                                                   required>
                                        </div>
                                        <p x-show="validation.first_name === false" class="text-red-500 text-xs mt-1">Please enter your first name</p>
                                    </div>
                                    
                                    <!-- Last Name -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="ri-user-line"></i>
                                            </span>
                                            <input type="text" 
                                                   name="last_name" 
                                                   x-model="form.last_name"
                                                   @blur="validateField('last_name')"
                                                   :class="{ 'input-valid': validation.last_name === true, 'input-invalid': validation.last_name === false }"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="Doe"
                                                   required>
                                        </div>
                                        <p x-show="validation.last_name === false" class="text-red-500 text-xs mt-1">Please enter your last name</p>
                                    </div>
                                    
                                    <!-- Email -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Work Email *</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="ri-mail-line"></i>
                                            </span>
                                            <input type="email" 
                                                   name="email" 
                                                   x-model="form.email"
                                                   @blur="validateField('email')"
                                                   :class="{ 'input-valid': validation.email === true, 'input-invalid': validation.email === false }"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="john@company.com"
                                                   required>
                                        </div>
                                        <p x-show="validation.email === false" class="text-red-500 text-xs mt-1">Please enter a valid email address</p>
                                    </div>
                                    
                                    <!-- Phone -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="ri-phone-line"></i>
                                            </span>
                                            <input type="tel" 
                                                   name="phone" 
                                                   x-model="form.phone"
                                                   @blur="validateField('phone')"
                                                   :class="{ 'input-valid': validation.phone === true, 'input-invalid': validation.phone === false }"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="+255 718 637 328"
                                                   required>
                                        </div>
                                        <p x-show="validation.phone === false" class="text-red-500 text-xs mt-1">Please enter your phone number</p>
                                    </div>
                                </div>
                                
                                <!-- Navigation -->
                                <div class="flex justify-end mt-8">
                                    <button type="button" 
                                            @click="nextStep()"
                                            class="px-8 py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all shadow-lg flex items-center gap-2 transform hover:scale-105">
                                        Next Step
                                        <i class="ri-arrow-right-line"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Step 2: Company Information -->
                            <div class="form-step" :class="{ 'active': currentStep === 2 }">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Company Details</h3>
                                <p class="text-gray-600 mb-8">Tell us about your organization.</p>
                                
                                <div class="space-y-6">
                                    <!-- Company Name -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="ri-building-line"></i>
                                            </span>
                                            <input type="text" 
                                                   name="company_name" 
                                                   x-model="form.company_name"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="Your Company Ltd">
                                        </div>
                                    </div>
                                    
                                    <!-- Job Title -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Job Title</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="ri-briefcase-line"></i>
                                            </span>
                                            <input type="text" 
                                                   name="job_title" 
                                                   x-model="form.job_title"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="CTO, IT Manager, etc.">
                                        </div>
                                    </div>
                                    
                                    <!-- Company Size -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-4">Company Size *</label>
                                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                            <label class="service-card rounded-xl p-4 border-2 border-gray-200 hover:border-green-300 cursor-pointer"
                                                   :class="{ 'selected': form.company_size === 'startup' }">
                                                <input type="radio" name="company_size" value="startup" x-model="form.company_size" class="hidden" required>
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                                                        <i class="ri-rocket-line"></i>
                                                    </div>
                                                    <div>
                                                        <div class="font-semibold text-gray-900">Startup</div>
                                                        <div class="text-xs text-gray-500">1-10 employees</div>
                                                    </div>
                                                </div>
                                                <div class="check-icon absolute top-2 right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </label>
                                            
                                            <label class="service-card rounded-xl p-4 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                                   :class="{ 'selected': form.company_size === 'sme' }">
                                                <input type="radio" name="company_size" value="sme" x-model="form.company_size" class="hidden">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-yellow-100 to-yellow-200 flex items-center justify-center">
                                                        <i class="ri-store-2-line"></i>
                                                    </div>
                                                    <div>
                                                        <div class="font-semibold text-gray-900">SME</div>
                                                        <div class="text-xs text-gray-500">11-100 employees</div>
                                                    </div>
                                                </div>
                                                <div class="check-icon absolute top-2 right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </label>
                                            
                                            <label class="service-card rounded-xl p-4 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                                   :class="{ 'selected': form.company_size === 'enterprise' }">
                                                <input type="radio" name="company_size" value="enterprise" x-model="form.company_size" class="hidden">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                                                        <i class="fas fa-building text-blue-600"></i>
                                                    </div>
                                                    <div>
                                                        <div class="font-semibold text-gray-900">Enterprise</div>
                                                        <div class="text-xs text-gray-500">100+ employees</div>
                                                    </div>
                                                </div>
                                                <div class="check-icon absolute top-2 right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </label>
                                            
                                            <label class="service-card rounded-xl p-4 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                                   :class="{ 'selected': form.company_size === 'government' }">
                                                <input type="radio" name="company_size" value="government" x-model="form.company_size" class="hidden">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                                                        <i class="ri-government-line"></i>
                                                    </div>
                                                    <div>
                                                        <div class="font-semibold text-gray-900">Government</div>
                                                        <div class="text-xs text-gray-500">Public sector</div>
                                                    </div>
                                                </div>
                                                <div class="check-icon absolute top-2 right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Navigation -->
                                <div class="flex justify-between mt-8">
                                    <button type="button" 
                                            @click="prevStep()"
                                            class="px-6 py-4 rounded-xl border-2 border-gray-300 text-gray-700 font-semibold hover:border-green-500 hover:text-green-600 transition-all flex items-center gap-2">
                                        <i class="ri-arrow-left-line"></i>
                                        Back
                                    </button>
                                    <button type="button" 
                                            @click="nextStep()"
                                            class="px-8 py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all shadow-lg flex items-center gap-2 transform hover:scale-105">
                                        Next Step
                                        <i class="ri-arrow-right-line"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Step 3: Service Selection -->
                            <div class="form-step" :class="{ 'active': currentStep === 3 }">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Select Service</h3>
                                <p class="text-gray-600 mb-8">What type of consultation are you looking for?</p>
                                
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <!-- Service Cards -->
                                    <label class="service-card rounded-xl p-6 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                           :class="{ 'selected': form.consultation_type === 'digital_transformation' }">
                                        <input type="radio" name="consultation_type" value="digital_transformation" x-model="form.consultation_type" class="hidden" required>
                                        <div class="flex items-start gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-digital-tachograph text-white text-xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-gray-900 mb-1">Digital Transformation</h4>
                                                <p class="text-sm text-gray-500">Modernize your business processes with cutting-edge technology.</p>
                                            </div>
                                        </div>
                                        <div class="check-icon absolute top-4 right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="service-card rounded-xl p-6 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                           :class="{ 'selected': form.consultation_type === 'cybersecurity' }">
                                        <input type="radio" name="consultation_type" value="cybersecurity" x-model="form.consultation_type" class="hidden">
                                        <div class="flex items-start gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-shield-alt text-white text-xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-gray-900 mb-1">Cybersecurity Assessment</h4>
                                                <p class="text-sm text-gray-500">Protect your digital assets with comprehensive security solutions.</p>
                                            </div>
                                        </div>
                                        <div class="check-icon absolute top-4 right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="service-card rounded-xl p-6 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                           :class="{ 'selected': form.consultation_type === 'cloud_migration' }">
                                        <input type="radio" name="consultation_type" value="cloud_migration" x-model="form.consultation_type" class="hidden">
                                        <div class="flex items-start gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-cloud text-white text-xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-gray-900 mb-1">Cloud Migration</h4>
                                                <p class="text-sm text-gray-500">Seamlessly migrate your infrastructure to the cloud.</p>
                                            </div>
                                        </div>
                                        <div class="check-icon absolute top-4 right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="service-card rounded-xl p-6 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                           :class="{ 'selected': form.consultation_type === 'software_development' }">
                                        <input type="radio" name="consultation_type" value="software_development" x-model="form.consultation_type" class="hidden">
                                        <div class="flex items-start gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-code text-white text-xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-gray-900 mb-1">Custom Software Development</h4>
                                                <p class="text-sm text-gray-500">Build tailored software solutions for your unique needs.</p>
                                            </div>
                                        </div>
                                        <div class="check-icon absolute top-4 right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="service-card rounded-xl p-6 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                           :class="{ 'selected': form.consultation_type === 'data_analytics' }">
                                        <input type="radio" name="consultation_type" value="data_analytics" x-model="form.consultation_type" class="hidden">
                                        <div class="flex items-start gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-yellow-500 to-yellow-600 flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-chart-line text-white text-xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-gray-900 mb-1">Data Analytics & AI</h4>
                                                <p class="text-sm text-gray-500">Unlock insights with advanced analytics and AI solutions.</p>
                                            </div>
                                        </div>
                                        <div class="check-icon absolute top-4 right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="service-card rounded-xl p-6 border-2 border-gray-200 hover:border-green-300 cursor-pointer relative"
                                           :class="{ 'selected': form.consultation_type === 'infrastructure' }">
                                        <input type="radio" name="consultation_type" value="infrastructure" x-model="form.consultation_type" class="hidden">
                                        <div class="flex items-start gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-cyan-500 to-cyan-600 flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-server text-white text-xl"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-gray-900 mb-1">ICT Infrastructure</h4>
                                                <p class="text-sm text-gray-500">Design and implement robust IT infrastructure.</p>
                                            </div>
                                        </div>
                                        <div class="check-icon absolute top-4 right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </label>
                                </div>
                                
                                <!-- Project Details -->
                                <div class="mt-8">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Project Details / Message *</label>
                                    <textarea name="project_details" 
                                              x-model="form.project_details"
                                              rows="4"
                                              class="w-full px-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all resize-none"
                                              placeholder="Tell us about your project, challenges, and what you hope to achieve..."
                                              required></textarea>
                                </div>
                                
                                <!-- Navigation -->
                                <div class="flex justify-between mt-8">
                                    <button type="button" 
                                            @click="prevStep()"
                                            class="px-6 py-4 rounded-xl border-2 border-gray-300 text-gray-700 font-semibold hover:border-green-500 hover:text-green-600 transition-all flex items-center gap-2">
                                        <i class="ri-arrow-left-line"></i>
                                        Back
                                    </button>
                                    <button type="button" 
                                            @click="nextStep()"
                                            class="px-8 py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all shadow-lg flex items-center gap-2 transform hover:scale-105">
                                        Next Step
                                        <i class="ri-arrow-right-line"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Step 4: Schedule -->
                            <div class="form-step" :class="{ 'active': currentStep === 4 }">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Schedule Your Session</h3>
                                <p class="text-gray-600 mb-8">Pick a date and time that works for you.</p>
                                
                                <div class="grid md:grid-cols-2 gap-6">
                                    <!-- Preferred Date -->
                                    <div class="input-group">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Date</label>
                                        <div class="relative">
                                            <span class="input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                            <input type="text" 
                                                   id="preferred-date"
                                                   name="preferred_date" 
                                                   x-model="form.preferred_date"
                                                   class="floating-input w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                                                   placeholder="Select date"
                                                   readonly>
                                        </div>
                                    </div>
                                    
                                    <!-- Preferred Time -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-4">Preferred Time</label>
                                        <div class="space-y-3">
                                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-green-300 transition-all"
                                                   :class="{ 'border-green-500 bg-green-50': form.preferred_time === 'morning' }">
                                                <input type="radio" name="preferred_time" value="morning" x-model="form.preferred_time" class="hidden">
                                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 mr-4 flex items-center justify-center"
                                                     :class="{ 'border-green-500 bg-green-500': form.preferred_time === 'morning' }">
                                                    <div x-show="form.preferred_time === 'morning'" class="w-2 h-2 bg-white rounded-full"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="font-semibold text-gray-900">Morning</div>
                                                    <div class="text-sm text-gray-500">9:00 AM - 12:00 PM</div>
                                                </div>
                                                <i class="fas fa-sun text-yellow-500"></i>
                                            </label>
                                            
                                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-green-300 transition-all"
                                                   :class="{ 'border-green-500 bg-green-50': form.preferred_time === 'afternoon' }">
                                                <input type="radio" name="preferred_time" value="afternoon" x-model="form.preferred_time" class="hidden">
                                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 mr-4 flex items-center justify-center"
                                                     :class="{ 'border-green-500 bg-green-500': form.preferred_time === 'afternoon' }">
                                                    <div x-show="form.preferred_time === 'afternoon'" class="w-2 h-2 bg-white rounded-full"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="font-semibold text-gray-900">Afternoon</div>
                                                    <div class="text-sm text-gray-500">12:00 PM - 5:00 PM</div>
                                                </div>
                                                <i class="fas fa-cloud-sun text-blue-500"></i>
                                            </label>
                                            
                                            <label class="flex items-center p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-green-300 transition-all"
                                                   :class="{ 'border-green-500 bg-green-50': form.preferred_time === 'evening' }">
                                                <input type="radio" name="preferred_time" value="evening" x-model="form.preferred_time" class="hidden">
                                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 mr-4 flex items-center justify-center"
                                                     :class="{ 'border-green-500 bg-green-500': form.preferred_time === 'evening' }">
                                                    <div x-show="form.preferred_time === 'evening'" class="w-2 h-2 bg-white rounded-full"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="font-semibold text-gray-900">Evening</div>
                                                    <div class="text-sm text-gray-500">5:00 PM - 8:00 PM</div>
                                                </div>
                                                <i class="fas fa-moon text-purple-500"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Summary -->
                                <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-yellow-50 rounded-xl border border-green-100">
                                    <h4 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                        <i class="fas fa-clipboard-check text-green-600"></i>
                                        Summary
                                    </h4>
                                    <div class="grid sm:grid-cols-2 gap-4 text-sm">
                                        <div>
                                            <span class="text-gray-500">Name:</span>
                                            <span class="font-medium text-gray-900 ml-1" x-text="form.first_name + ' ' + form.last_name"></span>
                                        </div>
                                        <div>
                                            <span class="text-gray-500">Email:</span>
                                            <span class="font-medium text-gray-900 ml-1" x-text="form.email"></span>
                                        </div>
                                        <div>
                                            <span class="text-gray-500">Service:</span>
                                            <span class="font-medium text-gray-900 ml-1" x-text="getServiceName(form.consultation_type)"></span>
                                        </div>
                                        <div>
                                            <span class="text-gray-500">Company Size:</span>
                                            <span class="font-medium text-gray-900 ml-1" x-text="getCompanySizeName(form.company_size)"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Navigation -->
                                <div class="flex justify-between mt-8">
                                    <button type="button" 
                                            @click="prevStep()"
                                            class="px-6 py-4 rounded-xl border-2 border-gray-300 text-gray-700 font-semibold hover:border-green-500 hover:text-green-600 transition-all flex items-center gap-2">
                                        <i class="ri-arrow-left-line"></i>
                                        Back
                                    </button>
                                    <button type="submit" 
                                            :disabled="submitting"
                                            class="px-8 py-4 rounded-xl bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-semibold hover:from-yellow-600 hover:to-yellow-700 transition-all shadow-lg flex items-center gap-2 transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <span x-show="!submitting">Submit Request</span>
                                        <span x-show="submitting">Submitting...</span>
                                        <i class="fas fa-paper-plane" x-show="!submitting"></i>
                                        <i class="fas fa-spinner fa-spin" x-show="submitting"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                        
                        <!-- Success Message -->
                        <div x-show="showSuccess" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="text-center py-12">
                            <div class="success-checkmark mb-6">
                                <i class="ri-check-line"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Request Submitted!</h3>
                            <p class="text-gray-600 mb-6">Thank you for scheduling a consultation. Our team will review your request and contact you within 24 hours to confirm your appointment.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/" class="px-6 py-3 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all">
                                    Return to Home
                                </a>
                                <button @click="resetForm()" class="px-6 py-3 rounded-xl border-2 border-green-600 text-green-700 font-semibold hover:bg-green-50 transition-all">
                                    Submit Another Request
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    @include('landing.partials.footer')
    
    <script>
        function consultationForm() {
            return {
                currentStep: 1,
                totalSteps: 4,
                steps: ['Personal Info', 'Company', 'Service', 'Schedule'],
                loading: false,
                loadingText: 'Processing',
                submitting: false,
                showSuccess: false,
                
                form: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    company_name: '',
                    job_title: '',
                    company_size: '',
                    consultation_type: '',
                    project_details: '',
                    preferred_date: '',
                    preferred_time: ''
                },
                
                validation: {
                    first_name: null,
                    last_name: null,
                    email: null,
                    phone: null
                },
                
                init() {
                    // Initialize date picker
                    flatpickr("#preferred-date", {
                        minDate: "today",
                        maxDate: new Date().fp_incr(30),
                        dateFormat: "Y-m-d",
                        disable: [
                            function(date) {
                                // Disable weekends
                                return (date.getDay() === 0 || date.getDay() === 6);
                            }
                        ],
                        onChange: (selectedDates, dateStr) => {
                            this.form.preferred_date = dateStr;
                        }
                    });
                },
                
                validateField(field) {
                    const value = this.form[field];
                    
                    switch(field) {
                        case 'first_name':
                        case 'last_name':
                            this.validation[field] = value.length >= 2;
                            break;
                        case 'email':
                            this.validation[field] = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                            break;
                        case 'phone':
                            this.validation[field] = value.length >= 10;
                            break;
                    }
                },
                
                validateStep() {
                    switch(this.currentStep) {
                        case 1:
                            this.validateField('first_name');
                            this.validateField('last_name');
                            this.validateField('email');
                            this.validateField('phone');
                            return this.validation.first_name && this.validation.last_name && 
                                   this.validation.email && this.validation.phone;
                        case 2:
                            return this.form.company_size !== '';
                        case 3:
                            return this.form.consultation_type !== '' && this.form.project_details.length >= 10;
                        case 4:
                            return true;
                        default:
                            return false;
                    }
                },
                
                nextStep() {
                    if (this.validateStep()) {
                        if (this.currentStep < this.totalSteps) {
                            this.currentStep++;
                            window.scrollTo({ top: 0, behavior: 'smooth' });
                        }
                    } else {
                        // Show validation error
                        this.shakeForm();
                    }
                },
                
                prevStep() {
                    if (this.currentStep > 1) {
                        this.currentStep--;
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                },
                
                shakeForm() {
                    const form = document.getElementById('consultation-form');
                    form.style.animation = 'shake 0.5s';
                    setTimeout(() => {
                        form.style.animation = '';
                    }, 500);
                },
                
                getServiceName(value) {
                    const services = {
                        'digital_transformation': 'Digital Transformation',
                        'cybersecurity': 'Cybersecurity Assessment',
                        'cloud_migration': 'Cloud Migration',
                        'software_development': 'Custom Software Development',
                        'data_analytics': 'Data Analytics & AI',
                        'infrastructure': 'ICT Infrastructure'
                    };
                    return services[value] || value;
                },
                
                getCompanySizeName(value) {
                    const sizes = {
                        'startup': 'Startup',
                        'sme': 'SME',
                        'enterprise': 'Enterprise',
                        'government': 'Government'
                    };
                    return sizes[value] || value;
                },
                
                async submitForm() {
                    this.submitting = true;
                    this.loading = true;
                    this.loadingText = 'Submitting your request';
                    
                    try {
                        const response = await fetch('/consultation', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify(this.form)
                        });
                        
                        if (response.ok) {
                            this.showSuccess = true;
                            this.triggerConfetti();
                        } else {
                            throw new Error('Submission failed');
                        }
                    } catch (error) {
                        alert('There was an error submitting your request. Please try again.');
                        console.error(error);
                    } finally {
                        this.submitting = false;
                        this.loading = false;
                    }
                },
                
                triggerConfetti() {
                    const colors = ['#16a34a', '#eab308', '#22c55e', '#facc15'];
                    for (let i = 0; i < 100; i++) {
                        setTimeout(() => {
                            this.createConfetti(colors[Math.floor(Math.random() * colors.length)]);
                        }, i * 10);
                    }
                },
                
                createConfetti(color) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.backgroundColor = color;
                    confetti.style.left = Math.random() * 100 + 'vw';
                    confetti.style.top = '-10px';
                    confetti.style.animation = `fall ${Math.random() * 3 + 2}s linear forwards`;
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 5000);
                },
                
                resetForm() {
                    this.currentStep = 1;
                    this.showSuccess = false;
                    this.form = {
                        first_name: '',
                        last_name: '',
                        email: '',
                        phone: '',
                        company_name: '',
                        job_title: '',
                        company_size: '',
                        consultation_type: '',
                        project_details: '',
                        preferred_date: '',
                        preferred_time: ''
                    };
                    this.validation = {
                        first_name: null,
                        last_name: null,
                        email: null,
                        phone: null
                    };
                }
            }
        }
        
        // Add shake animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
            @keyframes fall {
                to {
                    transform: translateY(100vh) rotate(360deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    </script>
    
</body>
</html>
