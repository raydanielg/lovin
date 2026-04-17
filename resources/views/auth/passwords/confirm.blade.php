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
    <h2 class="text-xl font-semibold text-white mb-1">Confirm Password</h2>
    <p class="text-gray-400 text-sm">Please confirm your password before continuing</p>
</div>

<!-- Confirm Password Form -->
<form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
    @csrf

    <!-- Password Field -->
    <div>
        <label for="password" class="input-label @error('password') error @enderror flex items-center gap-1 mb-1.5">
            Password <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-sm @error('password') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <input id="password" type="password" name="password" 
                class="auth-input w-full pl-10 pr-10 py-2.5 rounded text-sm @error('password') error @enderror" 
                placeholder="Enter your password" required autocomplete="current-password">
            <button type="button" onclick="togglePassword('password', 'password-toggle-icon-confirm')" 
                class="password-toggle absolute inset-y-0 right-0 pr-3 flex items-center">
                <i id="password-toggle-icon-confirm" class="fas fa-eye-slash text-sm"></i>
            </button>
        </div>
        @error('password')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn-signin w-full py-2.5 text-sm">
        Confirm Password
    </button>

    <!-- Forgot Password Link -->
    @if (Route::has('password.request'))
        <div class="text-center pt-2">
            <a href="{{ route('password.request') }}" class="text-sm text-gray-400 hover:text-white transition-colors">
                Forgot your password?
            </a>
        </div>
    @endif

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
