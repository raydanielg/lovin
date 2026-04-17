@extends('layouts.dashboard')

@section('title', 'Class Ranks')
@section('page_title', 'Class Rankings')

@section('content')
<div class="card p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Class Rankings</h3>
    <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Form</option>
            <option>Form 1</option>
            <option>Form 2</option>
            <option>Form 3</option>
            <option>Form 4</option>
        </select>
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Select Exam</option>
        </select>
        <select class="border border-gray-300 rounded-lg px-3 py-2">
            <option>Overall</option>
            <option>By Subject</option>
        </select>
        <button type="submit" class="btn-primary py-2 px-4 rounded-lg">
            <i class="fas fa-trophy mr-2"></i>View Ranks
        </button>
    </form>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Rank</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Student Name</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Average</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Grade</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="bg-yellow-50">
                    <td class="px-4 py-3 text-sm font-bold">1</td>
                    <td class="px-4 py-3 text-sm font-medium">John Doe</td>
                    <td class="px-4 py-3 text-sm">92.5%</td>
                    <td class="px-4 py-3 text-sm"><span class="bg-green-100 text-green-700 px-2 py-1 rounded">A</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
