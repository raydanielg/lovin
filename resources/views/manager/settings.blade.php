@extends('layouts.dashboard')

@section('title', 'My Profile & Settings')
@section('page_title', 'My Profile & Settings')

@section('content')
<!-- Profile Header Card -->
<div class="card p-6 mb-6">
    <div class="flex items-center gap-6">
        <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-green-700 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        <div class="flex-1">
            <h2 class="text-2xl font-bold text-gray-800">{{ auth()->user()->name }}</h2>
            <p class="text-gray-500 flex items-center gap-2">
                <i class="fas fa-envelope text-green-600"></i>
                {{ auth()->user()->email }}
            </p>
            <p class="text-gray-500 flex items-center gap-2 mt-1">
                <i class="fas fa-shield-alt text-green-600"></i>
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ auth()->user()->role?->name ?? 'Manager' }}
                </span>
            </p>
        </div>
        <div class="text-right">
            <p class="text-sm text-gray-500">Member since</p>
            <p class="font-semibold text-gray-800">{{ auth()->user()->created_at->format('M Y') }}</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Profile Settings -->
    <div class="lg:col-span-2 space-y-6">
        <div class="card p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <i class="fas fa-user-edit text-green-600"></i>
                Edit Profile
            </h3>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <div class="relative">
                            <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" value="{{ auth()->user()->name }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                            <input type="email" value="{{ auth()->user()->email }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 bg-gray-50" readonly>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <div class="relative">
                            <i class="fas fa-phone absolute left-3 top-3 text-gray-400"></i>
                            <input type="tel" value="{{ auth()->user()->profile?->phone_number }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                        <div class="relative">
                            <i class="fas fa-calendar absolute left-3 top-3 text-gray-400"></i>
                            <input type="date" value="{{ auth()->user()->profile?->date_of_birth?->format('Y-m-d') }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Region</label>
                        <div class="relative">
                            <i class="fas fa-map-marker-alt absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" value="{{ auth()->user()->profile?->region?->name ?? 'Not set' }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 bg-gray-50" readonly>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">District</label>
                        <div class="relative">
                            <i class="fas fa-city absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" value="{{ auth()->user()->profile?->district?->name ?? 'Not set' }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 bg-gray-50" readonly>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn-primary py-2.5 px-6 rounded-lg flex items-center gap-2">
                        <i class="fas fa-save"></i>
                        <span>Save Changes</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Change Password -->
        <div class="card p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <i class="fas fa-lock text-green-600"></i>
                Change Password
            </h3>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                        <div class="relative">
                            <i class="fas fa-key absolute left-3 top-3 text-gray-400"></i>
                            <input type="password" placeholder="Enter current password" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                        <div class="relative">
                            <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                            <input type="password" placeholder="Enter new password" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <div class="relative">
                            <i class="fas fa-check-circle absolute left-3 top-3 text-gray-400"></i>
                            <input type="password" placeholder="Confirm new password" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn-primary py-2.5 px-6 rounded-lg flex items-center gap-2">
                        <i class="fas fa-key"></i>
                        <span>Update Password</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Account Info Sidebar -->
    <div class="space-y-6">
        <div class="card p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Account Status</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-green-600"></i>
                        <span class="text-sm">Profile Complete</span>
                    </div>
                    <span class="text-xs bg-green-200 text-green-800 px-2 py-1 rounded">Yes</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-envelope text-blue-600"></i>
                        <span class="text-sm">Email Verified</span>
                    </div>
                    <span class="text-xs bg-blue-200 text-blue-800 px-2 py-1 rounded">Yes</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-yellow-600"></i>
                        <span class="text-sm">Last Login</span>
                    </div>
                    <span class="text-xs">Just now</span>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Links</h3>
            <div class="space-y-2">
                <a href="{{ route('manager.dashboard') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-tachometer-alt text-green-600 w-5"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
                <a href="{{ route('manager.students') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-users text-green-600 w-5"></i>
                    <span class="text-sm">Manage Students</span>
                </a>
                <a href="{{ route('manager.marks') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-clipboard-list text-green-600 w-5"></i>
                    <span class="text-sm">Enter Marks</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
