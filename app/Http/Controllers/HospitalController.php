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
        $hospital = DB::select("select * from hospitals");
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

        // $id = uniqid();
        $name = $request->hospital_name;
        $type = $request->hospital_type;
        $address = $request->address;
        $phone_number = $request->phone_number;
        $city = $request->city;
        $country = $request->country;
        $website = $request->website;
        $admin_name = $request->admin_name;
        $admin_email = $request->admin_email;


        $logo = time() . '.' . $request->hospital_logo->extension();
        $request->hospital_logo->move(public_path('backend/images/hospital'), $logo);


        DB::select('INSERT INTO `hospitals` (`hospital_name`, `hospital_type`, `address`, `phone_number`, `city`, `country`, `logo`, `website`, `admin_name`, `admin_email`, `created_at`, `updated_at`, `status`) VALUES ("' . $name . '", "' . $type . '", "' . $address . '", "' . $phone_number . '" ,"' . $city . '", "' . $country . '", "' . $logo . '", "' . $website . '", "' . $admin_name . '", "' . $admin_email . '", CURRENT_TIMESTAMP, NULL, "Active");');


        return redirect('/dashboard/hospital/create')->with([
            'message' => 'Hospital added successfully!',
            'type' => 'success'
        ]);

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
        $data = DB::select('select * from hospitals where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->e_hospital_name;
        $type = $request->e_hospital_type;
        $address = $request->e_address;
        $phone_number = $request->e_phone_number;
        $city = $request->e_city;
        $country = $request->e_country;
        $website = $request->e_website;
        $admin_name = $request->e_admin_name;
        $admin_email = $request->e_admin_email;
        $status = $request->e_status;

        $hospital = DB::table('hospitals')->where('id', $id)->first();
        if (!$hospital) {
            return response()->json(['error' => 'Hospital not found'], 404);
        }

        // Image Upload Fix
        if ($request->hasFile('e_hospital_logo')) {
            $editlogo = time() . '.' . $request->e_hospital_logo->extension();
            $request->e_hospital_logo->move(public_path('backend/images/hospital'), $editlogo);
        } else {
            $editlogo = $hospital->logo;
        }

        // $editlogo = time(). '.' . $request->e_hospital_logo->extension();
        // $request->e_hospital_logo->move(public_path('backend/images/hospital'), $editlogo);

        DB::select('UPDATE `hospitals` SET `hospital_name`= "' . $name . '",`hospital_type`= "' . $type . '",`address`= "' . $address . '" ,`phone_number`= "' . $phone_number . '", `city`="' . $city . '",`country`="' . $country . '",`logo`="' . $editlogo . '",`website`= "' . $website . '",`admin_name`= "' . $admin_name . '",`admin_email`="' . $admin_email . '",`updated_at`=NOW(),`status`="' . $status . '"  WHERE id = "' . $id . '"');


        return redirect('/dashboard/hospital/')->with(key: [
            'message' => 'Hospital Updated successfully!',
            'type' => 'success'
        ]);

        // return $request->all();
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('hospitals')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Hospital deleted successfully']);
        } else {
            return response()->json(['message' => 'Hospital not found'], 404);
        }
    }
}
