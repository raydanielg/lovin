@extends('layouts.dashboard')

@section('title', 'School Reports')
@section('page_title', 'School Performance Reports')

@section('content')
<div class="card p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">School Performance Report</h3>
    <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select School</option>
        </select>
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Year</option>
        </select>
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Term</option>
        </select>
        <button type="submit" class="btn-primary py-2 px-4 rounded-lg">
            <i class="fas fa-file-pdf mr-2"></i>Generate
        </button>
    </form>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-green-50 p-4 rounded-lg text-center">
            <p class="text-3xl font-bold text-green-600">85%</p>
            <p class="text-sm text-gray-600">Pass Rate</p>
        </div>
        <div class="bg-blue-50 p-4 rounded-lg text-center">
            <p class="text-3xl font-bold text-blue-600">450</p>
            <p class="text-sm text-gray-600">Total Students</p>
        </div>
        <div class="bg-yellow-50 p-4 rounded-lg text-center">
            <p class="text-3xl font-bold text-yellow-600">A</p>
            <p class="text-sm text-gray-600">Overall Grade</p>
        </div>
    </div>
</div>
@endsection
