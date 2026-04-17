@extends('layouts.dashboard')

@section('title', 'Subscription')
@section('page_title', 'Subscription Plans')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Free Plan -->
    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Free Plan</h3>
        <p class="text-3xl font-bold text-gray-900 mb-4">TSh 0<span class="text-sm font-normal text-gray-500">/month</span></p>
        <ul class="space-y-2 mb-6">
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Up to 100 students</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Basic reports</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Email support</li>
        </ul>
        <button class="w-full py-2 border-2 border-gray-300 rounded-lg text-gray-600 font-medium">Current Plan</button>
    </div>

    <!-- Pro Plan -->
    <div class="card p-6 border-2 border-green-500 relative">
        <span class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-green-500 text-white text-xs px-3 py-1 rounded-full">POPULAR</span>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Pro Plan</h3>
        <p class="text-3xl font-bold text-green-600 mb-4">TSh 50,000<span class="text-sm font-normal text-gray-500">/month</span></p>
        <ul class="space-y-2 mb-6">
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Unlimited students</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Advanced reports</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Live data entry</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Priority support</li>
        </ul>
        <button class="btn-primary w-full py-2 rounded-lg font-medium">Upgrade Now</button>
    </div>

    <!-- Enterprise Plan -->
    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Enterprise</h3>
        <p class="text-3xl font-bold text-gray-900 mb-4">TSh 150,000<span class="text-sm font-normal text-gray-500">/month</span></p>
        <ul class="space-y-2 mb-6">
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Everything in Pro</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Multiple schools</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Custom integrations</li>
            <li class="flex items-center gap-2 text-sm"><i class="fas fa-check text-green-600"></i> Dedicated support</li>
        </ul>
        <button class="w-full py-2 border-2 border-green-600 text-green-600 rounded-lg font-medium hover:bg-green-50">Contact Sales</button>
    </div>
</div>
@endsection
