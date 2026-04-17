@extends('layouts.dashboard')

@section('title', 'National Reports')
@section('page_title', 'National Performance Reports')

@section('content')
<div class="card p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">National Summary Report</h3>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Year</option>
        </select>
        <button type="submit" class="btn-primary py-2 px-4 rounded-lg">
            <i class="fas fa-flag mr-2"></i>Generate National Report
        </button>
    </form>
</div>
@endsection
