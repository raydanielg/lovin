@extends('layouts.dashboard')

@section('title', 'Student Reports')
@section('page_title', 'Individual Student Reports')

@section('content')
<div class="card p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Student Report</h3>
    <form class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Student</option>
        </select>
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Exam</option>
        </select>
        <button type="submit" class="btn-primary py-2 px-4 rounded-lg">
            <i class="fas fa-file-pdf mr-2"></i>Generate Report
        </button>
    </form>

    <div class="bg-gray-50 p-6 rounded-lg">
        <p class="text-gray-500 text-center">Select a student and exam to view their detailed performance report</p>
    </div>
</div>
@endsection
