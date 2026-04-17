@extends('layouts.dashboard')

@section('title', 'Import Schools - Preview')
@section('page_title', 'Import Schools Preview')

@section('content')
<div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-bold text-gray-800">Review Schools Before Import</h2>
            <p class="text-sm text-gray-500 mt-1">Review and confirm the schools to be imported into the database</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('manager.schools.index') }}" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition text-sm">
                <i class="fas fa-arrow-left mr-2"></i>Cancel
            </a>
            <a href="{{ route('manager.schools.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition text-sm">
                <i class="fas fa-check mr-2"></i>Confirm Import
            </a>
        </div>
    </div>

    <!-- Upload Section -->
    <div class="card p-6 mb-6">
        <h3 class="font-semibold text-gray-800 mb-4">Upload Schools File</h3>
        <form action="#" method="POST" enctype="multipart/form-data" class="flex flex-wrap items-end gap-4">
            @csrf
            <div class="flex-1 min-w-[300px]">
                <label class="block text-sm font-medium text-gray-700 mb-2">Select CSV or Excel File</label>
                <input type="file" name="import_file" accept=".csv,.xlsx,.xls" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">&nbsp;</label>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-sm">
                    <i class="fas fa-upload mr-2"></i>Preview File
                </button>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">&nbsp;</label>
                <button type="button" onclick="downloadTemplate()" class="px-4 py-2 border border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition text-sm">
                    <i class="fas fa-download mr-2"></i>Download Template
                </button>
            </div>
        </form>
    </div>

    <!-- Validation Summary -->
    <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="card p-4 bg-green-50 border-green-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-2xl font-bold text-green-600" id="validCount">0</p>
                    <p class="text-sm text-green-700">Valid Records</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="card p-4 bg-yellow-50 border-yellow-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-2xl font-bold text-yellow-600" id="warningCount">0</p>
                    <p class="text-sm text-yellow-700">Warnings</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-yellow-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="card p-4 bg-red-50 border-red-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-2xl font-bold text-red-600" id="errorCount">0</p>
                    <p class="text-sm text-red-700">Errors</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-times-circle text-red-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Table -->
    <div class="card overflow-hidden">
        <div class="p-4 border-b bg-gray-50">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold text-gray-800">Preview Data</h3>
                <span class="text-sm text-gray-500" id="totalRecords">0 records found</span>
            </div>
        </div>

        <div class="overflow-x-auto max-h-[500px]">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 sticky top-0">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700 w-10">
                            <input type="checkbox" id="selectAll" class="w-4 h-4 text-green-600 rounded border-gray-300">
                        </th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">#</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">School Name</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Registration No</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">District</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Type</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Phone</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Status</th>
                        <th class="px-4 py-3 text-center font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody id="previewTableBody" class="divide-y divide-gray-100">
                    <!-- Sample Data Row 1 -->
                    <tr class="hover:bg-gray-50" data-id="1">
                        <td class="px-4 py-3">
                            <input type="checkbox" class="record-checkbox w-4 h-4 text-green-600 rounded border-gray-300" checked>
                        </td>
                        <td class="px-4 py-3 text-gray-500">1</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center text-green-600 font-bold text-xs">AS</div>
                                <span class="font-medium text-gray-800">Arusha Secondary School</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-gray-600">SCH-001-2024</td>
                        <td class="px-4 py-3 text-gray-600">Arusha CBD</td>
                        <td class="px-4 py-3 text-gray-600">Secondary School</td>
                        <td class="px-4 py-3 text-gray-600">+255712345678</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">
                                <i class="fas fa-check mr-1"></i>Valid
                            </span>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <button onclick="removeRow(1)" class="text-red-500 hover:text-red-700" title="Remove">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Sample Data Row 2 -->
                    <tr class="hover:bg-gray-50" data-id="2">
                        <td class="px-4 py-3">
                            <input type="checkbox" class="record-checkbox w-4 h-4 text-green-600 rounded border-gray-300" checked>
                        </td>
                        <td class="px-4 py-3 text-gray-500">2</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold text-xs">MP</div>
                                <span class="font-medium text-gray-800">Milimani Primary School</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-gray-600">SCH-002-2024</td>
                        <td class="px-4 py-3 text-gray-600">Arumeru</td>
                        <td class="px-4 py-3 text-gray-600">Primary School</td>
                        <td class="px-4 py-3 text-gray-600">+255723456789</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">
                                <i class="fas fa-check mr-1"></i>Valid
                            </span>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <button onclick="removeRow(2)" class="text-red-500 hover:text-red-700" title="Remove">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Sample Data Row 3 - Warning -->
                    <tr class="hover:bg-gray-50 bg-yellow-50" data-id="3">
                        <td class="px-4 py-3">
                            <input type="checkbox" class="record-checkbox w-4 h-4 text-green-600 rounded border-gray-300" checked>
                        </td>
                        <td class="px-4 py-3 text-gray-500">3</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 font-bold text-xs">OM</div>
                                <span class="font-medium text-gray-800">Olmoti Secondary School</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-gray-600">SCH-003-2024</td>
                        <td class="px-4 py-3 text-gray-600">Karatu</td>
                        <td class="px-4 py-3 text-gray-600">Secondary School</td>
                        <td class="px-4 py-3 text-yellow-600">-</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-medium">
                                <i class="fas fa-exclamation-triangle mr-1"></i>Missing Phone
                            </span>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <button onclick="removeRow(3)" class="text-red-500 hover:text-red-700" title="Remove">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Sample Data Row 4 - Error -->
                    <tr class="hover:bg-gray-50 bg-red-50" data-id="4">
                        <td class="px-4 py-3">
                            <input type="checkbox" class="record-checkbox w-4 h-4 text-green-600 rounded border-gray-300">
                        </td>
                        <td class="px-4 py-3 text-gray-500">4</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 font-bold text-xs">NM</div>
                                <span class="font-medium text-gray-800">Ngorongoro Mixed School</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-red-600 font-medium">-</td>
                        <td class="px-4 py-3 text-gray-600">Ngorongoro</td>
                        <td class="px-4 py-3 text-gray-600">Mixed School</td>
                        <td class="px-4 py-3 text-gray-600">+255745678901</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-medium">
                                <i class="fas fa-times mr-1"></i>Missing Reg. No
                            </span>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <button onclick="removeRow(4)" class="text-red-500 hover:text-red-700" title="Remove">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <div class="p-4 border-t bg-gray-50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="checkbox" id="skipErrors" class="w-4 h-4 text-green-600 rounded border-gray-300">
                        Skip records with errors
                    </label>
                    <span class="text-sm text-gray-500" id="selectedCount">3 records selected</span>
                </div>
                <div class="flex items-center gap-3">
                    <button onclick="clearAll()" class="px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg text-sm transition">
                        <i class="fas fa-trash mr-2"></i>Clear All
                    </button>
                    <button onclick="confirmImport()" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition text-sm font-medium">
                        <i class="fas fa-upload mr-2"></i>Import Selected Schools
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructions Card -->
    <div class="card p-4 mt-6 bg-blue-50 border-blue-200">
        <div class="flex items-start gap-3">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <i class="fas fa-info-circle text-blue-600"></i>
            </div>
            <div>
                <h4 class="font-semibold text-blue-800 mb-1">Import Instructions</h4>
                <ul class="text-sm text-blue-700 space-y-1 list-disc list-inside">
                    <li>Ensure your CSV file has the following columns: School Name, Registration Number, District, School Type, Phone, Email</li>
                    <li>Registration Number must be unique for each school</li>
                    <li>District must match existing districts in the system</li>
                    <li>School Type can be: Primary School, Secondary School, Mixed School, or Special Needs School</li>
                    <li>Records with errors will be skipped unless you choose to import them anyway</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function downloadTemplate() {
        const template = `School Name,Registration Number,District,School Type,Phone,Email,Physical Address
Arusha Secondary School,SCH-001-2024,Arusha CBD,Secondary School,+255712345678,arusha@school.com,P.O. Box 1234 Arusha
Milimani Primary School,SCH-002-2024,Arumeru,Primary School,+255723456789,milimani@school.com,Olasiti Area
Olmoti Secondary School,SCH-003-2024,Karatu,Secondary School,+255734567890,olmoti@school.com,Karatu Town`;

        const blob = new Blob([template], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'schools_import_template.csv';
        a.click();
        window.URL.revokeObjectURL(url);
    }

    function removeRow(id) {
        const row = document.querySelector(`tr[data-id="${id}"]`);
        if (row) {
            row.remove();
            updateCounts();
        }
    }

    function clearAll() {
        if (confirm('Are you sure you want to remove all records?')) {
            document.getElementById('previewTableBody').innerHTML = '';
            updateCounts();
        }
    }

    function confirmImport() {
        const selected = document.querySelectorAll('.record-checkbox:checked').length;
        if (selected === 0) {
            alert('Please select at least one school to import');
            return;
        }

        if (confirm(`Are you sure you want to import ${selected} schools?`)) {
            // In a real implementation, this would submit the form with selected data
            alert('Import functionality will be implemented with AJAX/Form submission');
            window.location.href = '{{ route("manager.schools.index") }}';
        }
    }

    function updateCounts() {
        const total = document.querySelectorAll('#previewTableBody tr').length;
        const selected = document.querySelectorAll('.record-checkbox:checked').length;

        document.getElementById('totalRecords').textContent = total + ' records found';
        document.getElementById('selectedCount').textContent = selected + ' records selected';

        // Update validation counts (simplified)
        document.getElementById('validCount').textContent = total > 0 ? Math.floor(total * 0.6) : 0;
        document.getElementById('warningCount').textContent = total > 0 ? Math.floor(total * 0.2) : 0;
        document.getElementById('errorCount').textContent = total > 0 ? Math.floor(total * 0.2) : 0;
    }

    // Select all functionality
    document.getElementById('selectAll')?.addEventListener('change', function() {
        document.querySelectorAll('.record-checkbox').forEach(cb => {
            cb.checked = this.checked;
        });
        updateCounts();
    });

    // Individual checkbox change
    document.querySelectorAll('.record-checkbox').forEach(cb => {
        cb.addEventListener('change', updateCounts);
    });

    // Initial count
    updateCounts();
</script>
@endsection
