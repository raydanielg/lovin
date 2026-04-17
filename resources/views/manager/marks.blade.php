@extends('layouts.dashboard')

@section('title', 'Enter Marks')
@section('page_title', 'Enter Student Marks')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="card p-6 lg:col-span-2">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Select Student & Subject</h3>
        
        <form class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Test 1 (10%)</label>
                    <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2" max="10">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Test 2 (10%)</label>
                    <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2" max="10">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Midterm (20%)</label>
                    <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2" max="20">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Final (60%)</label>
                    <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2" max="60">
                </div>
            </div>

            <div class="flex items-center justify-between pt-4">
                <div class="text-lg font-semibold">
                    Total: <span class="text-green-600">--</span>/100
                </div>
                <button type="submit" class="btn-primary py-2 px-6 rounded-lg">
                    Save Marks
                </button>
            </div>
        </form>
    </div>

    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Stats</h3>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                <span class="text-sm text-gray-600">Completed Today</span>
                <span class="font-semibold text-green-600">12</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                <span class="text-sm text-gray-600">Pending Entry</span>
                <span class="font-semibold text-yellow-600">45</span>
            </div>
        </div>
    </div>
</div>
@endsection
