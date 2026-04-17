<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\District;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('manager.dashboard');
    }

    public function students()
    {
        return view('manager.students');
    }

    public function marks()
    {
        return view('manager.marks');
    }

    public function reports()
    {
        return view('manager.reports');
    }

    public function settings()
    {
        return view('manager.settings');
    }

    // Schools
    public function schoolsIndex()
    {
        $schools = School::with(['region', 'district'])
            ->where('manager_id', auth()->id())
            ->orWhereNull('manager_id')
            ->paginate(10);

        // Calculate statistics
        $totalSchools = School::where('manager_id', auth()->id())->orWhereNull('manager_id')->count();
        $totalStudents = School::where('manager_id', auth()->id())->orWhereNull('manager_id')->sum('student_count');
        $totalTeachers = School::where('manager_id', auth()->id())->orWhereNull('manager_id')->sum('teacher_count');
        $avgStudents = $totalSchools > 0 ? round($totalStudents / $totalSchools) : 0;

        return view('manager.schools.index', compact(
            'schools', 'totalSchools', 'totalStudents', 'totalTeachers', 'avgStudents'
        ));
    }

    public function schoolsCreate()
    {
        $districts = District::where('region_id', auth()->user()->profile?->region_id ?? 1)->get();
        return view('manager.schools.create', compact('districts'));
    }

    public function schoolsStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'registration_number' => 'required|string|unique:schools',
            'district_id' => 'required|exists:districts,id',
            'type' => 'required|in:Primary School,Secondary School,Mixed School,Special Needs School',
            'category' => 'required|in:Public,Private,Faith-Based',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
            'status' => 'required|in:Active,Inactive,Pending',
        ]);

        $regionId = District::find($validated['district_id'])->region_id;

        School::create([
            'name' => $validated['name'],
            'registration_number' => $validated['registration_number'],
            'region_id' => $regionId,
            'district_id' => $validated['district_id'],
            'type' => $validated['type'],
            'category' => $validated['category'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'status' => $validated['status'],
            'manager_id' => auth()->id(),
            'student_count' => 0,
            'teacher_count' => 0,
        ]);

        return redirect()->route('manager.schools.index')->with('success', 'School created successfully!');
    }

    public function schoolsDestroy($id)
    {
        $school = School::findOrFail($id);

        // Check if user owns this school
        if ($school->manager_id !== auth()->id()) {
            return redirect()->route('manager.schools.index')->with('error', 'You are not authorized to delete this school.');
        }

        $school->delete();

        return redirect()->route('manager.schools.index')->with('success', 'School deleted successfully!');
    }

    // Import Schools - Preview Page
    public function schoolsImportPreview(Request $request)
    {
        // This would normally parse the uploaded file
        // For now, we'll simulate with session data or show empty form

        $previewData = [];
        $validationStats = [
            'valid' => 0,
            'warning' => 0,
            'error' => 0,
        ];

        // If there's uploaded data in session (from modal), use it
        if ($request->has('preview_data')) {
            $previewData = $request->input('preview_data');
        }

        return view('manager.schools.import-preview', compact('previewData', 'validationStats'));
    }

    public function schoolsImportStore(Request $request)
    {
        // Handle actual import
        // This would process the validated data and save to database

        $importedCount = 0;
        $failedCount = 0;

        if ($request->has('schools')) {
            foreach ($request->input('schools') as $schoolData) {
                try {
                    School::create([
                        'name' => $schoolData['name'],
                        'registration_number' => $schoolData['registration_number'],
                        'region_id' => $schoolData['region_id'],
                        'district_id' => $schoolData['district_id'],
                        'type' => $schoolData['type'] ?? 'Secondary School',
                        'category' => $schoolData['category'] ?? 'Public',
                        'phone' => $schoolData['phone'] ?? null,
                        'email' => $schoolData['email'] ?? null,
                        'address' => $schoolData['address'] ?? null,
                        'status' => 'Active',
                        'manager_id' => auth()->id(),
                        'student_count' => 0,
                        'teacher_count' => 0,
                    ]);
                    $importedCount++;
                } catch (\Exception $e) {
                    $failedCount++;
                }
            }
        }

        $message = "Import complete: {$importedCount} schools imported";
        if ($failedCount > 0) {
            $message .= ", {$failedCount} failed";
        }

        return redirect()->route('manager.schools.index')->with('success', $message);
    }

    // Students
    public function studentsCreate()
    {
        return view('manager.students.create');
    }

    // Subjects
    public function subjectsIndex()
    {
        return view('manager.subjects.index');
    }

    public function subjectsCreate()
    {
        return view('manager.subjects.create');
    }

    // Examinations
    public function examsIndex()
    {
        return view('manager.exams.index');
    }

    public function examsManage()
    {
        return view('manager.exams.manage');
    }

    // Marks
    public function marksLive()
    {
        return view('manager.marks.live');
    }

    // Reports
    public function reportsSchool()
    {
        return view('manager.reports.school');
    }

    public function reportsStudent()
    {
        return view('manager.reports.student');
    }

    public function reportsClass()
    {
        return view('manager.reports.class');
    }

    public function reportsWard()
    {
        return view('manager.reports.ward');
    }

    public function reportsDistrict()
    {
        return view('manager.reports.district');
    }

    public function reportsRegional()
    {
        return view('manager.reports.regional');
    }

    public function reportsNational()
    {
        return view('manager.reports.national');
    }

    // Subscription & Feedback
    public function subscription()
    {
        return view('manager.subscription');
    }

    public function feedback()
    {
        return view('manager.feedback');
    }
}
