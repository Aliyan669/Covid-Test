<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccinations = DB::select("select * from vaccinations");
        $hospitals = DB::table('hospitals')->select('hospital_name')->where('status', 'Active')->get();

        return view('pages.backend.allVaccination', compact('vaccinations', 'hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hospitals = DB::table('hospitals')->select('hospital_name')->where('status', 'Active')->get();
        return view('pages.backend.addVaccination', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $cnic = $request->cnic;
        $dob = $request->dob;
        $gender = $request->gender;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $city = $request->city;
        $country = $request->country;
        $hospital = $request->hospital;
        $user_id = auth()->user()->id;
        $diagnosed = $request->diagnosed;
        $symptoms = is_array($request->symptoms) ? implode(',', $request->symptoms) : '';


        DB::select('INSERT INTO `vaccinations` (`name`, `cnic`, `dob`, `gender`, `email`, `phone_number`, `address`, `city`, `country`, `hospital`,  `diagnosed` ,  `symptoms`, `user_id`,`created_at`, `status`) VALUES ("' . $name . '", "' . $cnic . '", "' . $dob . '", "' . $gender . '" ,"' . $email . '", "' . $phone_number . '", "' . $address . '", "' . $city . '", "' . $country . '", "' . $hospital . '", "' . $diagnosed . '",   "' . $symptoms . '",  "' . $user_id . '", CURRENT_TIMESTAMP, "Pending");');


        return redirect('/dashboard/vaccination/create')->with([
            'message' => 'Vaccination Registration successfully!',
            'type' => 'success'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user_id = auth()->user()->id;
        // Sirf logged-in user ki vaccinations lein
        $vaccinations = DB::table('vaccinations')
            ->where('user_id', $user_id)
            ->get();
        return view('pages.backend.vaccinationReport', compact('vaccinations'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::select('select * from vaccinations where id= "' . $id . '"');
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->e_name;
        $cnic = $request->e_cnic;
        $dob = $request->e_dob;
        $gender = $request->e_gender;
        $email = $request->e_email;
        $phone_number = $request->e_phone_number;
        $address = $request->e_address;
        $city = $request->e_city;
        $country = $request->e_country;
        $hospital = $request->e_hospital;
        $diagnosed = $request->e_diagnosed;
        $symptoms = is_array($request->e_symptoms) ? implode(',', $request->e_symptoms) : '';
        $status = $request->e_status;

        DB::select('UPDATE `vaccinations` SET `name`= "' . $name . '",`cnic`= "' . $cnic . '",`dob`= "' . $dob . '" ,`gender`= "' . $gender . '", `email`="' . $email . '",`phone_number`="' . $phone_number . '",`address`="' . $address . '",`city`= "' . $city . '",`country`= "' . $country . '",`hospital`="' . $hospital . '",`diagnosed`="' . $diagnosed . '",`symptoms`="' . $symptoms . '",`updated_at`=NOW(),`status`="' . $status . '"  WHERE id = "' . $id . '"');


        return redirect('/dashboard/vaccination/')->with(key: [
            'message' => 'Vaccination Updated successfully!',
            'type' => 'success'
        ]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('vaccinations')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Vaccination deleted successfully']);
        } else {
            return response()->json(['message' => 'Vaccination not found'], 404);
        }
    }

}
