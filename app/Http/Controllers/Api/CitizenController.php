<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CitizenResource;
use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{

    public function index()
    {
        $citizens = Citizen::with('state', 'lga', 'ward')->orderBy('id','desc')->paginate(10);
        return response()->json(['data' =>  $citizens, 'messsage' => 'Citizen Data Retrieved Successfully'], 202);
    }


    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'state_id' => 'required',
            'lga_id' => 'required',
            'phone' => 'required',
            'ward_id' => 'required',
        ]);
        $citizens =  Citizen::create($request->all());
        return response()->json(['data' => $citizens, 'messsage' => 'Citizen Data Retrieved Successfully'], 202);
    }
}
