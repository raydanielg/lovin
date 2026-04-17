@extends('layouts.dashboard')

@section('title', 'Add Subject')
@section('page_title', 'Add New Subject')

@section('content')
<div class="card p-6 max-w-xl">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Subject Information</h3>
    <form class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Subject Name</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" placeholder="e.g. Mathematics">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Subject Code</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" placeholder="e.g. MAT">
        </div>
        <div class="pt-4">
            <button type="submit" class="btn-primary py-2 px-6 rounded-lg">Add Subject</button>
        </div>
    </form>
</div>
@endsection
