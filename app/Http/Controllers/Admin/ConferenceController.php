<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mock data since we don't have DB models set up completely
        $conferences = collect([
            (object) [
                'id' => 1,
                'title' => 'Pavyzdinė konferencija',
                'date' => '2023-12-01',
            ]
        ]);
        return view('admin.conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConferenceRequest $request)
    {
        // Logic to store conference
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sukurta sėkmingai.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         // Mock data
         $conference = (object) [
            'id' => 1,
            'title' => 'Pavyzdinė konferencija',
            'description' => 'Aprašymas...',
            'lecturers' => 'Lektoriai...',
            'date' => '2023-12-01',
            'time' => '10:00',
            'address' => 'Adresas...',
        ];
        return view('admin.conferences.show', compact('conference'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mock data
        $conference = (object) [
            'id' => 1,
            'title' => 'Pavyzdinė konferencija',
            'description' => 'Aprašymas...',
            'lecturers' => 'Lektoriai...',
            'date' => '2023-12-01',
            'time' => '10:00',
            'address' => 'Adresas...',
        ];
        return view('admin.conferences.edit', compact('conference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConferenceRequest $request, $id)
    {
        // Logic to update conference
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija atnaujinta sėkmingai.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Logic to delete conference
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija ištrinta sėkmingai.');
    }
}

