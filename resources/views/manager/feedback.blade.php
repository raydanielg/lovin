@extends('layouts.dashboard')

@section('title', 'Feedback')
@section('page_title', 'Send Feedback')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="card p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Send Us Your Feedback</h3>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Feedback Type</label>
                <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    <option>Feature Request</option>
                    <option>Bug Report</option>
                    <option>General Feedback</option>
                    <option>Other</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" placeholder="Brief subject">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea rows="5" class="w-full border border-gray-300 rounded-lg px-3 py-2" placeholder="Describe your feedback..."></textarea>
            </div>
            <button type="submit" class="btn-primary py-2 px-6 rounded-lg">
                <i class="fas fa-paper-plane mr-2"></i>Send Feedback
            </button>
        </form>
    </div>

    <div class="space-y-6">
        <div class="card p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact Support</h3>
            <div class="space-y-3">
                <p class="flex items-center gap-3 text-sm">
                    <i class="fas fa-envelope text-green-600"></i>
                    support@emas.co.tz
                </p>
                <p class="flex items-center gap-3 text-sm">
                    <i class="fas fa-phone text-green-600"></i>
                    +255 712 345 678
                </p>
                <p class="flex items-center gap-3 text-sm">
                    <i class="fas fa-clock text-green-600"></i>
                    Mon-Fri: 8AM - 5PM
                </p>
            </div>
        </div>

        <div class="card p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">FAQ</h3>
            <div class="space-y-3">
                <details class="group">
                    <summary class="flex items-center justify-between cursor-pointer text-sm font-medium">
                        How do I add a new student?
                        <i class="fas fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-sm text-gray-600 mt-2">Go to Students > Add Student and fill in the required information.</p>
                </details>
                <details class="group">
                    <summary class="flex items-center justify-between cursor-pointer text-sm font-medium">
                        How do I generate reports?
                        <i class="fas fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-sm text-gray-600 mt-2">Navigate to Reports section and select the type of report you need.</p>
                </details>
            </div>
        </div>
    </div>
</div>
@endsection
