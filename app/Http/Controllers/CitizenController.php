<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\LGAs;
use App\Models\State;
use App\Models\Wards;
use App\Services\CitizenServices;
use Illuminate\Http\Request;

class CitizenController extends Controller
{

    public function index(Request $request)
    {
        $search =  $request->input('q');
        if($search!=""){
            $citizens = Citizen::with('state', 'lga', 'ward')->where(function ($query) use ($search){
                $query->where('full_name', 'like', '%'.$search.'%')
                    ->orWhere('id', 'like', '%'.$search.'%')
                ->orWhere('gender', 'like', '%'.$search.'%');
            })
                ->paginate(10);
            $citizens->appends(['q' => $search]);
        }
        else{
            $citizens = Citizen::with('state', 'lga', 'ward')->orderBy('id','desc')->paginate(10);
        }
        return View('citizen.index')->with('citizens',$citizens);
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
        Citizen::create($request->all());
        return redirect()->route('citizen.index')->with('success','Citizen created successfully.');
    }

    public function create()
    {
        $state = State::all();
        $lga = LGAs::all();
        $ward = Wards::all();
        return view('citizen.create', compact('state', 'lga', 'ward'));
    }

    public function show(Citizen $citizen)
    {
        return view('citizen.show',compact('citizen'));
    }



}
