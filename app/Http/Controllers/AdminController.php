<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Home(){
        //  $hospital =DB::select("select * from hospitals");
         $hospitalCount =DB::select("SELECT COUNT(*) as total  FROM hospitals")[0]->total;
         $patientCount =DB::select("SELECT COUNT(*) as total  FROM vaccinations")[0]->total;

        return view('pages.backend.home' , compact('hospitalCount', 'patientCount'));
    }
}
