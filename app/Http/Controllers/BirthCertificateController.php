<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthCertificate;


class BirthCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $certificates = BirthCertificate::all();
       return response()->json($certificates);
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
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'health_status' => 'enum:positive,negative',
             'hospital_name' => 'required|string|max:50',
            'hospital_code' => 'required|string:max:10',
            'parents_surname' => 'required|string|max:50',
            'birth_date' => 'required|date'

        ]);

        $validated = BirthCertificate::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $certificate = BirthCertificate::find($id);
        if(!$certificate) {
            return response()->json(['Message' => 'Not Found'], 403);
        }
        return response()->json($certificate);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $certificate = BirthCertificate::find($id);
        if(!$certificate) {
            return response()->json(['Message' => 'Not Found'], 403);
        }
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'health_status' => 'enum:positive,negative',
            'hospital_name' => 'required|string|max:50',
            'hospital_code' => 'required|string:max:10',
            'parents_surname' => 'required|string|max:50',
            'birth_date' => 'required|date'

        ]);

        $certificate->update($validatedData);
        return response()->json($certificate);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificate = BirthCertificate::find($id);
        if(!$certificate) {
            return response()->json(['Message' => 'Not Found'], 404);
        }

        $certificate->delete();
        return response()->json(['Message' => 'Message Deleted']);
    }
}
