<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Transaction;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $report = [
            'total_patients' => Patient::count(),
            'total_revenue' => Transaction::where('status', 'paid')->sum('total_amount'),
            'total_medical_records' => MedicalRecord::count(),
        ];
        
        return view('admin.reports.index', compact('report'));
    }
}
