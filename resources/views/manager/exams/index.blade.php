@extends('layouts.dashboard')

@section('title', 'All Exams')
@section('page_title', 'Examinations')

@section('content')
<div class="card p-6">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-lg font-semibold text-gray-800">All Examinations</h3>
        <a href="{{ route('manager.exams.manage') }}" class="btn-primary py-2 px-4 rounded-lg flex items-center gap-2">
            <i class="fas fa-cogs"></i>
            <span>Manage Exam</span>
        </a>
    </div>
    <div class="space-y-3">
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div>
                <h4 class="font-semibold text-gray-800">Mid Term Examination 2024</h4>
                <p class="text-sm text-gray-500">Term 1 - March 2024</p>
            </div>
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Active</span>
        </div>
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div>
                <h4 class="font-semibold text-gray-800">Final Examination 2024</h4>
                <p class="text-sm text-gray-500">Term 2 - June 2024</p>
            </div>
            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">Upcoming</span>
        </div>
    </div>
</div>
@endsection
