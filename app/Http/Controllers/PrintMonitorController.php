<?php

namespace App\Http\Controllers;

use App\Models\PrintMonitor;
use Illuminate\Http\Request;

class PrintMonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all(); // capture all input
        $record = PrintMonitor::create($data); // make sure your model is fillable
        return response()->json(['success' => true, 'data' => $record]);

    }

    /**
     * Display the specified resource.
     */
    public function show(PrintMonitor $printMonitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrintMonitor $printMonitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrintMonitor $printMonitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrintMonitor $printMonitor)
    {
        //
    }
}
