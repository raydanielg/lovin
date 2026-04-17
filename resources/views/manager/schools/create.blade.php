@extends('layouts.dashboard')

@section('title', 'Add New School')
@section('page_title', 'Add New School')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Form -->
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-4 border-b bg-gray-50 rounded-t-xl">
                <h3 class="font-semibold text-gray-800 flex items-center gap-2">
                    <i class="fas fa-school text-green-600"></i>
                    School Information
                </h3>
            </div>
            <div class="p-6">
                <form class="space-y-5">
                    <!-- School Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">
                            School Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class="fas fa-school absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Enter full school name">
                        </div>
                        <p class="text-xs text-gray-500 mt-1">e.g., Arusha Secondary School</p>
                    </div>

                    <!-- Registration Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">
                            Registration Number <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <i class="fas fa-id-card absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="e.g., SCH-001-2024">
                        </div>
                    </div>

                    <!-- Region & District (Auto-filled from manager profile) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">
                                Region <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <i class="fas fa-map-marker-alt absolute left-3 top-3 text-gray-400"></i>
                                <input type="text" value="{{ auth()->user()->profile?->region?->name ?? 'Arusha' }}" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm bg-gray-50" readonly>
                            </div>
                            <p class="text-xs text-gray-500 mt-1"><i class="fas fa-info-circle"></i> Auto-filled from your profile</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">
                                District <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <i class="fas fa-city absolute left-3 top-3 text-gray-400"></i>
                                <select class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    <option value="">Select District</option>
                                    <option value="{{ auth()->user()->profile?->district?->name }}" selected>{{ auth()->user()->profile?->district?->name ?? 'Arusha CBD' }}</option>
                                    <option>Arumeru</option>
                                    <option>Karatu</option>
                                    <option>Monduli</option>
                                    <option>Ngorongoro</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- School Type & Category -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">School Type</label>
                            <div class="relative">
                                <i class="fas fa-graduation-cap absolute left-3 top-3 text-gray-400"></i>
                                <select class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    <option value="">Select Type</option>
                                    <option selected>Secondary School</option>
                                    <option>Primary School</option>
                                    <option>Mixed School</option>
                                    <option>Special Needs School</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Category</label>
                            <div class="relative">
                                <i class="fas fa-layer-group absolute left-3 top-3 text-gray-400"></i>
                                <select class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    <option value="">Select Category</option>
                                    <option selected>Public</option>
                                    <option>Private</option>
                                    <option>Faith-Based</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Phone Number</label>
                            <div class="relative">
                                <i class="fas fa-phone absolute left-3 top-3 text-gray-400"></i>
                                <input type="tel" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="+255...">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                            <div class="relative">
                                <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                                <input type="email" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="school@example.com">
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Physical Address</label>
                        <div class="relative">
                            <i class="fas fa-home absolute left-3 top-3 text-gray-400"></i>
                            <textarea rows="2" class="w-full border border-gray-300 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Enter street address, ward, village..."></textarea>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end gap-3 pt-4 border-t">
                        <a href="{{ route('manager.schools.index') }}" class="px-5 py-2.5 border border-gray-300 text-gray-700 rounded-lg text-sm hover:bg-gray-50 transition">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-2.5 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700 transition flex items-center gap-2">
                            <i class="fas fa-save"></i>
                            <span>Save School</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sidebar Info -->
    <div class="space-y-6">
        <!-- Quick Tips -->
        <div class="card p-5">
            <h4 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
                <i class="fas fa-lightbulb text-yellow-500"></i>
                Quick Tips
            </h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li class="flex items-start gap-2">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <span>Region is auto-filled from your profile</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <span>Choose the correct district within your region</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <span>Use official school registration number</span>
                </li>
            </ul>
        </div>

        <!-- Your Region Info -->
        <div class="card p-5">
            <h4 class="font-semibold text-gray-800 mb-3">Your Location</h4>
            <div class="space-y-3">
                <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                    <i class="fas fa-map-marked-alt text-green-600"></i>
                    <div>
                        <p class="text-sm font-medium text-gray-800">Region</p>
                        <p class="text-xs text-gray-500">{{ auth()->user()->profile?->region?->name ?? 'Arusha' }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg">
                    <i class="fas fa-city text-blue-600"></i>
                    <div>
                        <p class="text-sm font-medium text-gray-800">District</p>
                        <p class="text-xs text-gray-500">{{ auth()->user()->profile?->district?->name ?? 'Arusha CBD' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Schools -->
        <div class="card p-5">
            <h4 class="font-semibold text-gray-800 mb-3">Recently Added</h4>
            <div class="space-y-2">
                <div class="p-2 hover:bg-gray-50 rounded-lg transition cursor-pointer">
                    <p class="text-sm font-medium text-gray-800">Arusha Secondary</p>
                    <p class="text-xs text-gray-500">Added today</p>
                </div>
                <div class="p-2 hover:bg-gray-50 rounded-lg transition cursor-pointer">
                    <p class="text-sm font-medium text-gray-800">Milimani Primary</p>
                    <p class="text-xs text-gray-500">Added yesterday</p>
                </div>
            </div>
            <a href="{{ route('manager.schools.index') }}" class="block mt-3 text-sm text-green-600 hover:text-green-700 text-center">
                View All Schools <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</div>
@endsection
