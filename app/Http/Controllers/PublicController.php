<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Medicine;
use App\Models\Faq;
use App\Models\Queue;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $currentQueue = Queue::where('date', date('Y-m-d'))
            ->where('status', 'calling')
            ->orderBy('updated_at', 'desc')
            ->first();
        
        $services = Service::all();
        $medicines = Medicine::all();
        $faqs = Faq::all();
            
        return view('public.home', compact('currentQueue', 'services', 'medicines', 'faqs'));
    }

    public function services()
    {
        return redirect()->route('public.home');
    }

    public function medicines()
    {
        return redirect()->route('public.home');
    }

    public function faqs()
    {
        return redirect()->route('public.home');
    }
}
