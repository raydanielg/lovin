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
    <h2 class="text-xl font-semibold text-white mb-1">Reset Password</h2>
    <p class="text-gray-400 text-sm">Create a new password for your account</p>
</div>

<!-- Reset Password Form -->
<form method="POST" action="{{ route('password.update') }}" class="space-y-4">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <!-- Email Field -->
    <div>
        <label for="email" class="input-label flex items-center gap-1 mb-1.5">
            Email Address <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-envelope text-sm text-gray-400"></i>
            </div>
            <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm" 
                placeholder="Enter your email" required autocomplete="email" autofocus readonly>
        </div>
    </div>

    <!-- Password Field -->
    <div>
        <label for="password" class="input-label @error('password') error @enderror flex items-center gap-1 mb-1.5">
            New Password <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-sm @error('password') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <input id="password" type="password" name="password" 
                class="auth-input w-full pl-10 pr-10 py-2.5 rounded text-sm @error('password') error @enderror" 
                placeholder="Create a new password" required autocomplete="new-password">
            <button type="button" onclick="togglePassword('password', 'password-toggle-icon-reset')" 
                class="password-toggle absolute inset-y-0 right-0 pr-3 flex items-center">
                <i id="password-toggle-icon-reset" class="fas fa-eye-slash text-sm"></i>
            </button>
        </div>
        @error('password')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password Field -->
    <div>
        <label for="password-confirm" class="input-label flex items-center gap-1 mb-1.5">
            Confirm Password <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-sm text-gray-400"></i>
            </div>
            <input id="password-confirm" type="password" name="password_confirmation" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm" 
                placeholder="Confirm your new password" required autocomplete="new-password">
        </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn-signin w-full py-2.5 text-sm">
        Reset Password
    </button>

    <!-- Login Link -->
    <div class="text-center pt-2">
        <p class="text-sm text-gray-400">
            Remember your password? 
            <a href="{{ route('login') }}" class="link-green">
                Sign in
            </a>
        </p>
    </div>

    <!-- Help Text -->
    <div class="text-center pt-1">
        <p class="text-xs text-gray-500">
            Need help? Contact us at 
            <a href="mailto:info@emas.co.tz" class="link-green text-xs">
                info@emas.co.tz
            </a>
        </p>
    </div>
</form>
@endsection
