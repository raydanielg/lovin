@extends('layouts.dashboard')

@section('title', 'District Reports')
@section('page_title', 'District Performance Reports')

@section('content')
<div class="card p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">District Summary Report</h3>
    <form class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select District</option>
        </select>
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Year</option>
        </select>
        <button type="submit" class="btn-primary py-2 px-4 rounded-lg">
            <i class="fas fa-chart-pie mr-2"></i>Generate
        </button>
    </form>
</div>
@endsection
