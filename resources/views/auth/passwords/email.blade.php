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
    <h2 class="text-xl font-semibold text-white mb-1">Forgot Password?</h2>
    <p class="text-gray-400 text-sm">Enter your email to reset your password</p>
</div>

@if (session('status'))
    <div class="mb-4 p-3 bg-green-500/20 border border-green-500/50 rounded">
        <p class="text-sm text-green-400 flex items-center gap-2">
            <i class="fas fa-check-circle text-xs"></i>
            {{ session('status') }}
        </p>
    </div>
@endif

<!-- Forgot Password Form -->
<form method="POST" action="{{ route('password.email') }}" class="space-y-4">
    @csrf

    <!-- Email Field -->
    <div>
        <label for="email" class="input-label @error('email') error @enderror flex items-center gap-1 mb-1.5">
            Email Address <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-envelope text-sm @error('email') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm @error('email') error @enderror" 
                placeholder="Enter your email" required autocomplete="email" autofocus>
        </div>
        @error('email')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn-signin w-full py-2.5 text-sm">
        Send Password Reset Link
    </button>

    <!-- Back to Login -->
    <div class="text-center pt-2">
        <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-white transition-colors flex items-center justify-center gap-2">
            <i class="fas fa-arrow-left text-xs"></i>
            Back to login
        </a>
    </div>

    <!-- Help Text -->
    <div class="text-center pt-1">
        <p class="text-xs text-gray-500">
            Need help? Contact us at
            <a href="mailto:info@glovin.co.tz" class="link-green text-xs">
                info@glovin.co.tz
            </a>
        </p>
    </div>
</form>
@endsection
