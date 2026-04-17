@extends('layouts.dashboard')

@section('title', 'Students')
@section('page_title', 'Manage Students')

@section('content')
<div class="card p-6">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-lg font-semibold text-gray-800">All Students</h3>
        <button class="btn-primary py-2 px-4 rounded-lg flex items-center gap-2">
            <i class="fas fa-plus"></i>
            <span>Add Student</span>
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Student ID</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Name</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Form</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Region</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr>
                    <td class="px-4 py-3 text-sm">STU001</td>
                    <td class="px-4 py-3 text-sm font-medium">John Doe</td>
                    <td class="px-4 py-3 text-sm">Form 4</td>
                    <td class="px-4 py-3 text-sm">Arusha</td>
                    <td class="px-4 py-3 text-sm">
                        <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
