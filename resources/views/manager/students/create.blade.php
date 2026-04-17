@extends('layouts.dashboard')

@section('title', 'Add Student')
@section('page_title', 'Add New Student')

@section('content')
<div class="card p-6 max-w-2xl">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Student Information</h3>
    <form class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2">
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Form/Class</label>
            <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                <option>Form 1</option>
                <option>Form 2</option>
                <option>Form 3</option>
                <option>Form 4</option>
            </select>
        </div>
        <div class="pt-4">
            <button type="submit" class="btn-primary py-2 px-6 rounded-lg">Add Student</button>
        </div>
    </form>
</div>
@endsection
