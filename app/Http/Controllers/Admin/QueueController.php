<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        $queues = Queue::with('patient')
            ->where('date', date('Y-m-d'))
            ->orderBy('queue_number', 'asc')
            ->get();
            
        return view('admin.queues.index', compact('queues'));
    }

    public function updateStatus(Request $request, Queue $queue)
    {
        $request->validate([
            'status' => 'required|in:waiting,calling,finished',
        ]);

        $queue->update(['status' => $request->status]);

        return back()->with('success', 'Status antrian berhasil diperbarui.');
    }
}
