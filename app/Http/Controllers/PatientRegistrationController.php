<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientRegistrationController extends Controller
{
    public function create()
    {
        return view('public.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|unique:patients,nik',
            'address' => 'required|string',
            'phone' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|in:L,P',
        ]);

        DB::transaction(function () use ($validated, &$queue) {
            $patient = Patient::create($validated);
            
            $lastQueue = Queue::where('date', date('Y-m-d'))->max('queue_number') ?? 0;
            
            $queue = Queue::create([
                'patient_id' => $patient->id,
                'queue_number' => $lastQueue + 1,
                'status' => 'waiting',
                'date' => date('Y-m-d'),
            ]);
        });

        return redirect()->route('public.home')->with('success', 'Pendaftaran berhasil! Nomor antrian Anda adalah: ' . $queue->queue_number);
    }
}
