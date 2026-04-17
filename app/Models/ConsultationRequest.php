<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'job_title',
        'consultation_type',
        'company_size',
        'project_details',
        'preferred_date',
        'preferred_time',
        'status',
        'notes',
        'ip_address',
        'submitted_at'
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'submitted_at' => 'datetime',
    ];

    public static function getConsultationTypes(): array
    {
        return [
            'digital_transformation' => 'Digital Transformation',
            'cybersecurity' => 'Cybersecurity Assessment',
            'cloud_migration' => 'Cloud Migration',
            'software_development' => 'Custom Software Development',
            'data_analytics' => 'Data Analytics & AI',
            'infrastructure' => 'ICT Infrastructure',
            'other' => 'Other'
        ];
    }

    public static function getCompanySizes(): array
    {
        return [
            'startup' => 'Startup (1-10 employees)',
            'sme' => 'SME (11-100 employees)',
            'enterprise' => 'Enterprise (100+ employees)',
            'government' => 'Government/Public Sector'
        ];
    }

    public static function getPreferredTimes(): array
    {
        return [
            'morning' => 'Morning (9:00 AM - 12:00 PM)',
            'afternoon' => 'Afternoon (12:00 PM - 5:00 PM)',
            'evening' => 'Evening (5:00 PM - 8:00 PM)'
        ];
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getStatusBadgeAttribute(): string
    {
        $badges = [
            'pending' => '<span class="badge badge-warning">Pending</span>',
            'confirmed' => '<span class="badge badge-success">Confirmed</span>',
            'completed' => '<span class="badge badge-info">Completed</span>',
            'cancelled' => '<span class="badge badge-danger">Cancelled</span>'
        ];
        return $badges[$this->status] ?? '<span class="badge badge-secondary">Unknown</span>';
    }
}
