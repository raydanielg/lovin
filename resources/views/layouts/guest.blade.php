<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Glovin Limited - Secure Digital Solutions</title>
    <link rel="icon" type="image/png" href="{{ asset('transparentslogo/tranp-green.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        body {
            background: 
                radial-gradient(at 0% 0%, rgba(250, 204, 21, 0.2) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(34, 197, 94, 0.2) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(250, 204, 21, 0.2) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(34, 197, 94, 0.2) 0px, transparent 50%),
                linear-gradient(135deg, #14532d 0%, #166534 50%, #14532d 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.5),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }
        .auth-sidebar {
            background: linear-gradient(180deg, #fefce8 0%, #fef9c3 50%, #fef08a 100%);
            position: relative;
        }
        .auth-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(at 20% 20%, rgba(34, 197, 94, 0.1) 0px, transparent 50%),
                radial-gradient(at 80% 80%, rgba(250, 204, 21, 0.1) 0px, transparent 50%);
            pointer-events: none;
        }
        .auth-form-side {
            background: linear-gradient(135deg, #166534 0%, #14532d 50%, #166534 100%);
            position: relative;
        }
        .auth-form-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(at 0% 0%, rgba(250, 204, 21, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(34, 197, 94, 0.15) 0px, transparent 50%);
            pointer-events: none;
        }
        .auth-input {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: white;
            transition: all 0.25s ease;
            border-radius: 8px;
        }
        .auth-input::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }
        .auth-input:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.25);
        }
        .auth-input:focus {
            outline: none;
            border-color: #eab308;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 0 3px rgba(250, 204, 21, 0.2);
        }
        .auth-input.error {
            border-color: #dc2626;
            background: rgba(220, 38, 38, 0.05);
        }
        .auth-input.error:focus {
            border-color: #dc2626;
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.15);
        }
        select.auth-input option {
            background: #166534;
            color: white;
            padding: 10px;
        }
        select.auth-input option:hover,
        select.auth-input option:focus,
        select.auth-input option:checked {
            background: #15803d;
            color: white;
        }
        select.auth-input option:first-child {
            color: rgba(255, 255, 255, 0.5);
        }
        .input-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.875rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        .input-label.error {
            color: #dc2626;
        }
        .error-text {
            color: #dc2626;
            font-size: 0.75rem;
            margin-top: 0.375rem;
            font-weight: 500;
        }
        .error-icon {
            color: #dc2626;
        }
        .password-toggle {
            color: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: all 0.2s;
            padding: 4px;
            border-radius: 4px;
        }
        .password-toggle:hover {
            color: rgba(255, 255, 255, 0.8);
            background: rgba(255, 255, 255, 0.1);
        }
        .btn-signin {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2);
        }
        .btn-signin:hover {
            background: linear-gradient(135deg, #4b5563 0%, #374151 100%);
            transform: translateY(-1px);
            box-shadow: 0 8px 12px -2px rgba(0, 0, 0, 0.25);
        }
        .btn-signin:active {
            transform: translateY(0);
        }
        .btn-signin.active {
            background: linear-gradient(135deg, #eab308 0%, #ca8a04 100%);
        }
        .btn-signin.active:hover {
            background: linear-gradient(135deg, #ca8a04 0%, #a16207 100%);
        }
        .emas-logo {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        .emas-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .link-green {
            color: #facc15;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }
        .link-green:hover {
            color: #fde047;
            text-decoration: underline;
        }
        .divider {
            width: 45px;
            height: 3px;
            background: linear-gradient(90deg, #9ca3af 0%, #6b7280 50%, #9ca3af 100%);
            margin: 1rem 0;
            border-radius: 2px;
        }
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
        }
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.03;
        }
        .shape-1 {
            width: 400px;
            height: 400px;
            background: white;
            top: -100px;
            right: -100px;
        }
        .shape-2 {
            width: 300px;
            height: 300px;
            background: white;
            bottom: -50px;
            left: -50px;
        }
    </style>
</head>
<body class="flex items-center justify-center p-4">
    <!-- Floating Background Shapes -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>

    <div class="auth-card w-full max-w-4xl flex min-h-[550px]">
        <!-- Left Sidebar -->
        <div class="hidden md:flex md:w-5/12 auth-sidebar flex-col justify-between p-8">
            <div>
                <!-- Logo -->
                <div class="mb-6">
                    <div class="emas-logo">
                        <img src="{{ asset('transparentslogo/tranp-green.png') }}"
                             alt="Glovin Logo"
                             onerror="this.style.display='none'; this.parentNode.innerHTML='<i class=\'fas fa-shield-alt text-5xl text-green-700\'></i>'">
                    </div>
                </div>

                <!-- Title Section -->
                <div>
                    <h1 class="text-2xl font-bold text-green-800 mb-1">
                        Glovin Limited
                    </h1>
                    <p class="text-xs font-semibold text-green-700 tracking-wide uppercase mb-3">
                        Technology Solutions
                    </p>
                    <div class="divider" style="background: linear-gradient(90deg, #16a34a 0%, #ca8a04 50%, #16a34a 100%);"></div>
                    <p class="text-green-800 text-sm leading-relaxed">
                        Secure, scalable, and intelligent digital solutions across Africa. We deliver software development, cybersecurity, and ICT infrastructure services.
                    </p>
                </div>
            </div>
            
            <!-- Footer -->
            <div>
                <p class="text-xs text-green-700 font-medium">
                    © {{ date('Y') }} Glovin Limited
                </p>
                <p class="text-xs text-green-600 mt-1">
                    info@glovin.co.tz
                </p>
            </div>
        </div>

        <!-- Right Side - Auth Form -->
        <div class="flex-1 auth-form-side flex items-center justify-center p-8 md:p-12">
            <div class="w-full max-w-sm relative z-10">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (!input || !icon) return;
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>
</html>
