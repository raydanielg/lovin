@extends('layouts.dashboard')

@section('title', 'All Subjects')
@section('page_title', 'Subjects Management')

@section('content')
<div class="card p-6">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-lg font-semibold text-gray-800">All Subjects</h3>
        <a href="{{ route('manager.subjects.create') }}" class="btn-primary py-2 px-4 rounded-lg flex items-center gap-2">
            <i class="fas fa-plus"></i>
            <span>Add Subject</span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="p-4 bg-gray-50 rounded-lg">
            <h4 class="font-semibold text-gray-800">Mathematics</h4>
            <p class="text-sm text-gray-500">Code: MAT</p>
        </div>
        <div class="p-4 bg-gray-50 rounded-lg">
            <h4 class="font-semibold text-gray-800">English</h4>
            <p class="text-sm text-gray-500">Code: ENG</p>
        </div>
        <div class="p-4 bg-gray-50 rounded-lg">
            <h4 class="font-semibold text-gray-800">Kiswahili</h4>
            <p class="text-sm text-gray-500">Code: KIS</p>
        </div>
    </div>
</div>
@endsection
