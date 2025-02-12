<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.backend.allHospitals');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

              return view('pages.backend.addHospitals');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name =  $request->hospital_name;
        $id = uniqid();
        DB::select('INSERT INTO `hospitals` (`hospital_name`, `created_at`, `updated_at`, `status`) VALUES ("'.$name.'", CURRENT_TIMESTAMP, NULL, "Active");');
        return redirect('/dashboard/hospital/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
