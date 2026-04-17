@extends('layouts.dashboard')

@section('title', 'Reports')
@section('page_title', 'Generate Reports')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Class Performance Report</h3>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Form</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Form 1</option>
                    <option>Form 2</option>
                    <option>Form 3</option>
                    <option>Form 4</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Term</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Term 1</option>
                    <option>Term 2</option>
                    <option>Term 3</option>
                </select>
            </div>
            <button type="submit" class="btn-primary w-full py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                <i class="fas fa-file-pdf"></i>
                <span>Generate PDF Report</span>
            </button>
        </form>
    </div>

    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Subject Analysis</h3>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Mathematics</option>
                    <option>English</option>
                    <option>Kiswahili</option>
                    <option>Science</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Report Type</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Pass/Fail Analysis</option>
                    <option>Grade Distribution</option>
                    <option>Top Performers</option>
                </select>
            </div>
            <button type="submit" class="btn-primary w-full py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                <i class="fas fa-chart-bar"></i>
                <span>Generate Analysis</span>
            </button>
        </form>
    </div>
</div>
@endsection
