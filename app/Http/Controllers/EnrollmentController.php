<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use Illuminate\View\View;
use App\Models\Batch;
use App\Models\Student;
use App\Models\Payment;


class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entollments= Enrollment::all();
        return view ('entollments.index')->with('entollments', $entollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches= Batch::pluck('name', 'id');
        $students= Student::pluck('name', 'id');
        return view('entollments.create', compact('batches', 'students'));
        return view('entollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('entollments')->with('flash_message', 'Enrollment Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $entollments = Enrollment::find($id);
        return view('entollments.show')->with('entollments', $entollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entollments = Enrollment::find($id);
        return view('entollments.edit')->with('entollments', $entollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entollments = Enrollment::find($id);
        $input = $request->all();
        $entollments->update($input);
        return redirect('entollments')->with('flash_message', 'Enrollment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('entollments')->with('flash_message', 'Enrollment deleted!');
    }
}
