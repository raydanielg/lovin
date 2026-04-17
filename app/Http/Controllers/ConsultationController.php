<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ConsultationController extends Controller
{
    /**
     * Store a new consultation request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'consultation_type' => 'required|in:digital_transformation,cybersecurity,cloud_migration,software_development,data_analytics,infrastructure,other',
            'company_size' => 'required|in:startup,sme,enterprise,government',
            'project_details' => 'required|string|min:10',
            'preferred_date' => 'nullable|date|after_or_equal:today',
            'preferred_time' => 'nullable|in:morning,afternoon,evening',
        ], [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'consultation_type.required' => 'Please select a consultation type.',
            'consultation_type.in' => 'Please select a valid consultation type.',
            'company_size.required' => 'Please select your company size.',
            'project_details.required' => 'Please provide details about your project.',
            'project_details.min' => 'Please provide at least 10 characters about your project.',
            'preferred_date.after_or_equal' => 'Please select a date from today onwards.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create the consultation request
            $consultation = ConsultationRequest::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company_name' => $request->company_name,
                'job_title' => $request->job_title,
                'consultation_type' => $request->consultation_type,
                'company_size' => $request->company_size,
                'project_details' => $request->project_details,
                'preferred_date' => $request->preferred_date,
                'preferred_time' => $request->preferred_time,
                'status' => 'pending',
                'ip_address' => $request->ip(),
                'submitted_at' => now(),
            ]);

            // Send notification email (optional - can be implemented later)
            // $this->sendNotificationEmail($consultation);

            return response()->json([
                'success' => true,
                'message' => 'Your consultation request has been submitted successfully.',
                'data' => [
                    'id' => $consultation->id,
                    'reference' => 'GLV-' . str_pad($consultation->id, 6, '0', STR_PAD_LEFT)
                ]
            ], 201);

        } catch (\Exception $e) {
            \Log::error('Consultation submission error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request. Please try again.'
            ], 500);
        }
    }

    /**
     * Get all consultation requests (for admin use).
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $consultations = ConsultationRequest::orderBy('submitted_at', 'desc')->get();
        
        return response()->json([
            'success' => true,
            'data' => $consultations
        ]);
    }

    /**
     * Get a specific consultation request.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $consultation = ConsultationRequest::find($id);
        
        if (!$consultation) {
            return response()->json([
                'success' => false,
                'message' => 'Consultation request not found.'
            ], 404);
        }
        
        return response()->json([
            'success' => true,
            'data' => $consultation
        ]);
    }

    /**
     * Update consultation status.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function updateStatus(Request $request, int $id): JsonResponse
    {
        $consultation = ConsultationRequest::find($id);
        
        if (!$consultation) {
            return response()->json([
                'success' => false,
                'message' => 'Consultation request not found.'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required|in:pending,confirmed,completed,cancelled',
            'notes' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $consultation->status = $request->status;
        if ($request->has('notes')) {
            $consultation->notes = $request->notes;
        }
        $consultation->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'data' => $consultation
        ]);
    }

    /**
     * Get consultation statistics (for dashboard).
     *
     * @return JsonResponse
     */
    public function statistics(): JsonResponse
    {
        $stats = [
            'total' => ConsultationRequest::count(),
            'pending' => ConsultationRequest::where('status', 'pending')->count(),
            'confirmed' => ConsultationRequest::where('status', 'confirmed')->count(),
            'completed' => ConsultationRequest::where('status', 'completed')->count(),
            'cancelled' => ConsultationRequest::where('status', 'cancelled')->count(),
            'by_service' => ConsultationRequest::selectRaw('consultation_type, count(*) as count')
                ->groupBy('consultation_type')
                ->get(),
            'by_company_size' => ConsultationRequest::selectRaw('company_size, count(*) as count')
                ->groupBy('company_size')
                ->get(),
            'recent' => ConsultationRequest::orderBy('submitted_at', 'desc')
                ->limit(5)
                ->get()
        ];

        return response()->json([
            'success' => true,
            'data' => $stats
        ]);
    }
}
