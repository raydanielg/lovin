@extends('layouts.dashboard')

@section('title', 'Live Data Entry')
@section('page_title', 'Live Marks Entry')

@section('content')
<div class="card p-6">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
            <span class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></span>
            Live Data Entry Mode
        </h3>
        <div class="flex items-center gap-2 text-green-600">
            <i class="fas fa-wifi"></i>
            <span class="text-sm font-medium">Connected</span>
        </div>
    </div>

    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
        <p class="text-sm text-yellow-800 flex items-center gap-2">
            <i class="fas fa-info-circle"></i>
            Changes are saved automatically in real-time
        </p>
    </div>

    <form class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Student</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Select Student</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Select Subject</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Marks</label>
                <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2" placeholder="Enter marks">
            </div>
        </div>
        <button type="submit" class="btn-primary py-2 px-6 rounded-lg">
            <i class="fas fa-save mr-2"></i>Save Entry
        </button>
    </form>
</div>
@endsection
