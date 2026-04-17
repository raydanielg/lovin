@extends('layouts.dashboard')

@section('title', 'Manage Exam')
@section('page_title', 'Manage Examination')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Create New Exam</h3>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Exam Name</label>
                <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Term</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Term 1</option>
                    <option>Term 2</option>
                    <option>Term 3</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Year</label>
                <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2" value="2024">
            </div>
            <button type="submit" class="btn-primary w-full py-2 rounded-lg">Create Exam</button>
        </form>
    </div>

    <div class="card p-6 lg:col-span-2">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Exam Schedule</h3>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Subject</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Date</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Time</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Duration</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-4 py-3 text-sm">Mathematics</td>
                        <td class="px-4 py-3 text-sm">March 15, 2024</td>
                        <td class="px-4 py-3 text-sm">08:00 AM</td>
                        <td class="px-4 py-3 text-sm">2 hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
