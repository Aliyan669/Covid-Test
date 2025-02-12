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
        $hospital =DB::select("select * from hospitals");
        return view('pages.backend.allHospitals', compact('hospital'));

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

        // $request->validate([
        //     'hospital_name'=> 'required'
        // ]);



        $id = uniqid();
        $name = $request->hospital_name;
        $type = $request->hospital_type;
        $address = $request->address;
        $phone_number = $request->phone_number;
        $city = $request->city;
        $country = $request->country;
        $website = $request->website;
        $admin_name = $request->admin_name;
        $admin_email = $request->admin_email;



        // DB::select('INSERT INTO `hospitals` (`hospital_name`, `created_at`, `updated_at`, `status`) VALUES ("'.$name.'", CURRENT_TIMESTAMP, NULL, "Active");');

        DB::select('INSERT INTO `hospitals` (`hospital_name`, `hospital_type`, `address`, `phone_number`, `city`, `country`, `logo`, `website`, `admin_name`, `admin_email`, `created_at`, `updated_at`, `status`) VALUES ("' . $name . '", "' . $type . '", "' . $address . '", 22 ,"' . $city . '", "' . $country . '", "image" , "' . $website . '", "' . $admin_name . '", "' . $admin_email . '", CURRENT_TIMESTAMP, NULL, "Active");');


        return redirect('/dashboard/hospital/create')->with([
            'message' => 'Hospital added successfully!',
            'type' => 'success'
        ]);
        ;
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
