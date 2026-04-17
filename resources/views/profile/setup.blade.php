@extends('layouts.guest')

@section('content')
<!-- Language Selector -->
<div class="flex justify-end mb-4">
    <div class="relative">
        <button class="flex items-center gap-2 text-sm text-gray-400 hover:text-gray-600 transition-colors">
            <i class="fas fa-globe text-xs"></i>
            <span class="text-xs">English</span>
            <img src="https://flagcdn.com/w20/gb.png" alt="UK" class="w-4 h-3 object-cover rounded-sm">
            <i class="fas fa-chevron-down text-xs ml-1"></i>
        </button>
    </div>
</div>

<!-- Progress Steps -->
<div class="mb-6">
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-semibold {{ $profile->profile_step == 'basic' ? 'bg-yellow-500 text-gray-900' : 'bg-green-500 text-white' }}">
                @if($profile->profile_step == 'basic')
                    1
                @else
                    <i class="fas fa-check text-xs"></i>
                @endif
            </div>
            <span class="text-xs text-gray-300 font-medium">Basic Info</span>
        </div>
        <div class="flex-1 mx-3 h-1 rounded-full {{ in_array($profile->profile_step, ['region', 'complete']) ? 'bg-green-500' : 'bg-gray-600' }}"></div>
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-semibold {{ $profile->profile_step == 'region' ? 'bg-yellow-500 text-gray-900' : ($profile->profile_step == 'complete' ? 'bg-green-500 text-white' : 'bg-gray-600 text-gray-400') }}">
                @if($profile->profile_step == 'complete')
                    <i class="fas fa-check text-xs"></i>
                @else
                    2
                @endif
            </div>
            <span class="text-xs text-gray-300 font-medium">Region</span>
        </div>
    </div>
</div>

<!-- Step 1: Basic Information -->
@if($profile->profile_step == 'basic')
<div class="text-center mb-6">
    <h2 class="text-xl font-semibold text-white mb-1">Complete Your Profile</h2>
    <p class="text-gray-400 text-sm">Please fill in your basic information</p>
</div>

<form method="POST" action="{{ route('profile.store.basic') }}" class="space-y-4">
    @csrf

    <!-- Phone Number -->
    <div>
        <label for="phone_number" class="input-label @error('phone_number') error @enderror flex items-center gap-1 mb-1.5">
            <i class="fas fa-phone text-xs"></i>
            Phone Number <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-400 text-sm">+255</span>
            </div>
            <input id="phone_number" type="tel" name="phone_number" value="{{ old('phone_number', $profile->phone_number) }}" 
                class="auth-input w-full pl-14 pr-3 py-2.5 rounded text-sm @error('phone_number') error @enderror" 
                placeholder="712345678" required>
        </div>
        @error('phone_number')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- Date of Birth -->
    <div>
        <label for="date_of_birth" class="input-label @error('date_of_birth') error @enderror flex items-center gap-1 mb-1.5">
            <i class="fas fa-calendar text-xs"></i>
            Date of Birth <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-calendar-alt text-sm @error('date_of_birth') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth', $profile->date_of_birth?->format('Y-m-d')) }}" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm @error('date_of_birth') error @enderror" 
                required>
        </div>
        @error('date_of_birth')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- Gender -->
    <div>
        <label for="gender" class="input-label @error('gender') error @enderror flex items-center gap-1 mb-1.5">
            <i class="fas fa-venus-mars text-xs"></i>
            Gender <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-user text-sm @error('gender') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <select id="gender" name="gender" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm @error('gender') error @enderror appearance-none cursor-pointer" 
                required style="background-image: none;">
                <option value="" disabled selected>Select Gender</option>
                <option value="male" {{ old('gender', $profile->gender) == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender', $profile->gender) == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender', $profile->gender) == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <i class="fas fa-chevron-down text-xs text-gray-400"></i>
            </div>
        </div>
        @error('gender')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn-signin active w-full py-2.5 text-sm flex items-center justify-center gap-2">
        Continue
        <i class="fas fa-arrow-right text-xs"></i>
    </button>

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
@endif

<!-- Step 2: Region Information -->
@if($profile->profile_step == 'region')
<div class="text-center mb-6">
    <h2 class="text-xl font-semibold text-white mb-1">Region Details</h2>
    <p class="text-gray-400 text-sm">Select your region and location</p>
</div>

<form method="POST" action="{{ route('profile.store.region') }}" class="space-y-4">
    @csrf

    <!-- Region -->
    <div>
        <label for="region_id" class="input-label @error('region_id') error @enderror flex items-center gap-1 mb-1.5">
            <i class="fas fa-map-marked-alt text-xs"></i>
            Region (Mkoa) <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-map text-sm @error('region_id') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <select id="region_id" name="region_id" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm @error('region_id') error @enderror" 
                required>
                <option value="">Select Region</option>
                @foreach($regions as $region)
                    <option value="{{ $region->id }}" {{ old('region_id', $profile->region_id) == $region->id ? 'selected' : '' }}>
                        {{ $region->name }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('region_id')
            <p class="error-text">{{ $message }}</p>
        @enderror
    </div>

    <!-- District -->
    <div>
        <label for="district_id" class="input-label @error('district_id') error @enderror flex items-center gap-1 mb-1.5">
            <i class="fas fa-building text-xs"></i>
            District (Wilaya) <span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-city text-sm @error('district_id') error-icon @else text-gray-400 @enderror"></i>
            </div>
            <select id="district_id" name="district_id" 
                class="auth-input w-full pl-10 pr-3 py-2.5 rounded text-sm @error('district_id') error @enderror appearance-none cursor-pointer" 
                required style="background-image: none;" disabled>
                <option value="">Select District</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <i class="fas fa-chevron-down text-xs text-gray-400"></i>
            </div>
        </div>
        @error('district_id')
            <p class="error-text">{{ $message }}</p>
        @enderror
        <p id="district-hint" class="text-xs text-gray-500 mt-1">Select a region first</p>
    </div>

    <script>
        document.getElementById('region_id').addEventListener('change', function() {
            var regionId = this.value;
            var districtSelect = document.getElementById('district_id');
            var districtHint = document.getElementById('district-hint');
            
            if (regionId) {
                districtSelect.disabled = true;
                districtSelect.innerHTML = '<option value="">Loading...</option>';
                
                fetch('{{ url("/districts") }}/' + regionId, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        districtSelect.innerHTML = '<option value="">Select District</option>';
                        if (data && data.length > 0) {
                            data.forEach(function(district) {
                                var option = document.createElement('option');
                                option.value = district.id;
                                option.textContent = district.name;
                                districtSelect.appendChild(option);
                            });
                            districtHint.textContent = data.length + ' districts available';
                        } else {
                            districtHint.textContent = 'No districts found for this region';
                        }
                        districtSelect.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        districtSelect.innerHTML = '<option value="">Error loading districts</option>';
                        districtHint.textContent = 'Please try again or select another region';
                    });
            } else {
                districtSelect.innerHTML = '<option value="">Select District</option>';
                districtSelect.disabled = true;
                districtHint.textContent = 'Select a region first';
            }
        });
    </script>

    <!-- Submit Button -->
    <button type="submit" class="btn-signin active w-full py-2.5 text-sm flex items-center justify-center gap-2">
        Complete Setup
        <i class="fas fa-check text-xs"></i>
    </button>

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
@endif
@endsection
