@extends('layouts.dashboard')

@section('title', 'Schools Management')
@section('page_title', 'Schools Management')

@section('content')
<!-- Filters & Actions -->
<div class="card p-4 mb-4">
    <div class="flex flex-wrap items-center justify-between gap-3">
        <div class="flex items-center gap-2">
            <input type="checkbox" id="selectAll" class="w-4 h-4 text-green-600 rounded border-gray-300 focus:ring-green-500">
            <label for="selectAll" class="text-sm text-gray-600">Select All</label>
            <button id="bulkDeleteBtn" class="hidden ml-3 px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-sm hover:bg-red-100 transition">
                <i class="fas fa-trash-alt mr-1"></i>
                <span>Bulk Delete (<span id="selectedCount">0</span>)</span>
            </button>
        </div>
        <div class="flex items-center gap-2">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" placeholder="Search schools..." class="pl-9 pr-4 py-1.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 w-64">
            </div>
            <select class="px-3 py-1.5 border border-gray-300 rounded-lg text-sm">
                <option>All Regions</option>
                <option>Arusha</option>
                <option>Dar es Salaam</option>
                <option>Dodoma</option>
            </select>
        </div>
    </div>
</div>

<!-- Main Table Card -->
<div class="card">
    <!-- Table Header Actions -->
    <div class="flex flex-wrap items-center justify-between gap-3 p-4 border-b">
        <div class="flex items-center gap-2">
            <a href="{{ route('manager.schools.create') }}" class="px-4 py-2 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700 transition flex items-center gap-2">
                <i class="fas fa-plus"></i>
                <span>Add School</span>
            </a>
            <a href="{{ route('manager.schools.import.preview') }}" class="px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm hover:bg-blue-100 transition flex items-center gap-2">
                <i class="fas fa-file-import"></i>
                <span>Import</span>
            </a>
        </div>
        <div class="flex items-center gap-2">
            <a href="#" class="px-3 py-2 bg-gray-50 text-gray-600 rounded-lg text-sm hover:bg-gray-100 transition flex items-center gap-2">
                <i class="fas fa-file-export"></i>
                <span>Export</span>
            </a>
            <button class="px-3 py-2 bg-gray-50 text-gray-600 rounded-lg text-sm hover:bg-gray-100 transition">
                <i class="fas fa-print"></i>
            </button>
        </div>
    </div>

    <!-- Compact Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 py-2 w-10"></th>
                    <th class="px-3 py-2 text-left font-medium text-gray-600">School</th>
                    <th class="px-3 py-2 text-left font-medium text-gray-600">Region</th>
                    <th class="px-3 py-2 text-left font-medium text-gray-600">District</th>
                    <th class="px-3 py-2 text-center font-medium text-gray-600">Students</th>
                    <th class="px-3 py-2 text-center font-medium text-gray-600">Status</th>
                    <th class="px-3 py-2 text-center font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($schools as $school)
                <tr class="hover:bg-gray-50 transition group">
                    <td class="px-3 py-2">
                        <input type="checkbox" class="school-checkbox w-4 h-4 text-green-600 rounded border-gray-300 focus:ring-green-500" value="{{ $school->id }}">
                    </td>
                    <td class="px-3 py-2">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center font-bold text-xs" style="background-color: {{ ['#dcfce7', '#dbeafe', '#f3e8ff', '#ffedd5', '#ccfbf1'][($school->id % 5)] }}; color: {{ ['#16a34a', '#2563eb', '#9333ea', '#ea580c', '#0d9488'][($school->id % 5)] }}">
                                {{ $school->initials }}
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">{{ $school->name }}</p>
                                <p class="text-xs text-gray-400">Reg: {{ $school->registration_number }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-3 py-2">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-blue-50 text-blue-700 rounded text-xs">
                            <i class="fas fa-map-marker-alt text-[10px]"></i>
                            {{ $school->region?->name ?? 'N/A' }}
                        </span>
                    </td>
                    <td class="px-3 py-2 text-gray-600">{{ $school->district?->name ?? 'N/A' }}</td>
                    <td class="px-3 py-2 text-center">
                        <span class="font-medium text-gray-800">{{ number_format($school->student_count) }}</span>
                    </td>
                    <td class="px-3 py-2 text-center">
                        @if($school->status === 'Active')
                        <span class="inline-flex items-center px-2 py-0.5 bg-green-100 text-green-700 rounded-full text-xs">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1"></span>
                            Active
                        </span>
                        @elseif($school->status === 'Pending')
                        <span class="inline-flex items-center px-2 py-0.5 bg-yellow-100 text-yellow-700 rounded-full text-xs">
                            <span class="w-1.5 h-1.5 bg-yellow-500 rounded-full mr-1"></span>
                            Pending
                        </span>
                        @else
                        <span class="inline-flex items-center px-2 py-0.5 bg-red-100 text-red-700 rounded-full text-xs">
                            <span class="w-1.5 h-1.5 bg-red-500 rounded-full mr-1"></span>
                            Inactive
                        </span>
                        @endif
                    </td>
                    <td class="px-3 py-2 text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a href="#" class="w-8 h-8 flex items-center justify-center bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white rounded-lg transition shadow-sm" title="Edit School">
                                <i class="fas fa-edit text-xs"></i>
                            </a>
                            <a href="#" class="w-8 h-8 flex items-center justify-center bg-green-50 text-green-600 hover:bg-green-600 hover:text-white rounded-lg transition shadow-sm" title="View Details">
                                <i class="fas fa-eye text-xs"></i>
                            </a>
                            <button onclick="deleteSchool({{ $school->id }})" class="w-8 h-8 flex items-center justify-center bg-red-50 text-red-600 hover:bg-red-600 hover:text-white rounded-lg transition shadow-sm" title="Delete School">
                                <i class="fas fa-trash-alt text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-3 py-8 text-center text-gray-500">
                        <i class="fas fa-school text-4xl text-gray-300 mb-3"></i>
                        <p>No schools found</p>
                        <a href="{{ route('manager.schools.create') }}" class="text-green-600 hover:underline text-sm mt-1 inline-block">Add your first school</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between p-4 border-t">
        <p class="text-sm text-gray-500">Showing {{ $schools->firstItem() ?? 0 }}-{{ $schools->lastItem() ?? 0 }} of {{ $schools->total() }} schools</p>
        <div class="flex items-center gap-1">
            {{ $schools->links('pagination::simple-tailwind') }}
        </div>
    </div>
</div>

<script>
    // Checkbox functionality
    const selectAll = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('.school-checkbox');
    const bulkDeleteBtn = document.getElementById('bulkDeleteBtn');
    const selectedCount = document.getElementById('selectedCount');

    selectAll.addEventListener('change', function() {
        checkboxes.forEach(cb => cb.checked = this.checked);
        updateBulkDelete();
    });

    checkboxes.forEach(cb => {
        cb.addEventListener('change', updateBulkDelete);
    });

    function updateBulkDelete() {
        const checked = document.querySelectorAll('.school-checkbox:checked').length;
        selectedCount.textContent = checked;
        if (checked > 0) {
            bulkDeleteBtn.classList.remove('hidden');
        } else {
            bulkDeleteBtn.classList.add('hidden');
        }
    }

    // Bulk delete
    bulkDeleteBtn.addEventListener('click', function() {
        if (confirm('Are you sure you want to delete ' + selectedCount.textContent + ' schools?')) {
            alert('Bulk delete functionality will be implemented');
        }
    });

    // Delete single school
    function deleteSchool(id) {
        if (confirm('Are you sure you want to delete this school?')) {
            // In a real implementation, this would make an AJAX call to delete the school
            alert('Delete school ID: ' + id + ' - This will be implemented with AJAX');
        }
    }
</script>
@endsection
