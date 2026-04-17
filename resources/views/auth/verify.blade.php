@extends('layouts.guest')

@section('content')
<!-- Language Selector -->
<div class="flex justify-end mb-6">
    <div class="relative">
        <button class="flex items-center gap-2 text-sm text-gray-400 hover:text-gray-600 transition-colors">
            <i class="fas fa-globe text-xs"></i>
            <span class="text-xs">English</span>
            <img src="https://flagcdn.com/w20/gb.png" alt="UK" class="w-4 h-3 object-cover rounded-sm">
            <i class="fas fa-chevron-down text-xs ml-1"></i>
        </button>
    </div>
</div>

<!-- Welcome Text -->
<div class="text-center mb-6">
    <h2 class="text-xl font-semibold text-white mb-1">Verify Email</h2>
    <p class="text-gray-400 text-sm">Verify your email address to continue</p>
</div>

<!-- Success Message -->
@if (session('resent'))
    <div class="mb-4 p-3 bg-green-500/20 border border-green-500/50 rounded">
        <p class="text-sm text-green-400 flex items-center gap-2">
            <i class="fas fa-check-circle text-xs"></i>
            A fresh verification link has been sent to your email address.
        </p>
    </div>
@endif

<!-- Verification Message -->
<div class="text-center space-y-4">
    <div class="w-14 h-14 bg-yellow-500/20 rounded-full flex items-center justify-center mx-auto">
        <i class="fas fa-envelope-open-text text-xl text-yellow-400"></i>
    </div>
    
    <p class="text-gray-300 text-sm leading-relaxed">
        Before proceeding, please check your email for a verification link. 
        If you did not receive the email, click the button below to request another.
    </p>

    <!-- Resend Form -->
    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn-signin w-full py-2.5 text-sm flex items-center justify-center gap-2">
            <i class="fas fa-paper-plane text-xs"></i>
            Resend Verification Link
        </button>
    </form>

    <!-- Logout Option -->
    <form method="POST" action="{{ route('logout') }}" class="pt-1">
        @csrf
        <button type="submit" class="text-sm text-gray-400 hover:text-white transition-colors flex items-center justify-center gap-2 mx-auto">
            <i class="fas fa-sign-out-alt text-xs"></i>
            Sign out and try another email
        </button>
    </form>

    <!-- Help Text -->
    <div class="text-center pt-1">
        <p class="text-xs text-gray-500">
            Need help? Contact us at 
            <a href="mailto:info@emas.co.tz" class="link-green text-xs">
                info@emas.co.tz
            </a>
        </p>
    </div>
</div>
@endsection
