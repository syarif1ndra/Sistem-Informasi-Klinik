<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BirthRecord;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BirthRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $birthRecords = BirthRecord::latest()->paginate(15);
        return view('admin.birth_records.index', compact('birthRecords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.birth_records.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'baby_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_time' => 'required|date_format:H:i',
            'birth_place' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'mother_name' => 'required|string|max:255',
            'mother_nik' => 'required|string|max:16',
            'father_name' => 'required|string|max:255',
            'father_nik' => 'required|string|max:16',
            'mother_address' => 'nullable|string',
            'father_address' => 'nullable|string',
            'baby_weight' => 'nullable|string|max:10',
            'baby_length' => 'nullable|string|max:10',
            'birth_certificate_number' => 'nullable|string|max:50',
            'notes' => 'nullable|string',
        ]);

        BirthRecord::create($validated);

        return redirect()->route('admin.birth_records.index')
            ->with('success', 'Data kelahiran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BirthRecord $birthRecord)
    {
        return view('admin.birth_records.show', compact('birthRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BirthRecord $birthRecord)
    {
        return view('admin.birth_records.edit', compact('birthRecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BirthRecord $birthRecord)
    {
        $validated = $request->validate([
            'baby_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_time' => 'required|date_format:H:i',
            'birth_place' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'mother_name' => 'required|string|max:255',
            'mother_nik' => 'required|string|max:16',
            'father_name' => 'required|string|max:255',
            'father_nik' => 'required|string|max:16',
            'mother_address' => 'nullable|string',
            'father_address' => 'nullable|string',
            'baby_weight' => 'nullable|string|max:10',
            'baby_length' => 'nullable|string|max:10',
            'birth_certificate_number' => 'nullable|string|max:50',
            'notes' => 'nullable|string',
        ]);

        $birthRecord->update($validated);

        return redirect()->route('admin.birth_records.index')
            ->with('success', 'Data kelahiran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BirthRecord $birthRecord)
    {
        $birthRecord->delete();

        return redirect()->route('admin.birth_records.index')
            ->with('success', 'Data kelahiran berhasil dihapus.');
    }

    /**
     * Generate and download birth certificate
     */
    public function generatePdf(BirthRecord $birthRecord)
    {
        $html = view('admin.birth_records.certificate', compact('birthRecord'))->render();
        
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadHTML($html);
        $pdf->setPaper('A4', 'portrait');
        
        $filename = 'Surat_Kelahiran_' . str_replace(' ', '_', $birthRecord->baby_name) . '_' . date('Y-m-d') . '.pdf';
        
        return $pdf->download($filename);
    }
}
