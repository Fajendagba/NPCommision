<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use App\Models\LGA;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/* 
    * This controller is for registering a citizen
*/
class RegisterController extends Controller
{
    public function __construct () {
        $this->middleware(['auth']);
    }

    public function index () {
        $wards = Ward::get();       
        return view('auth.register', [
            'wards' => $wards,
        ]);
    }

    public function store (Request $request) {
        // dd($request);

        $this->validate($request,
        [
            'name'=> 'required|max:255',
            'ward'=> 'required',
            'gender'=> 'required',
            'address'=> 'required',
        ]);

        Citizen::create([
            'name' => $request->name,
            'ward_id' => $request->ward,
            'gender' => $request->gender,
            'address' => $request->state,
        ]);
        $citizens = Citizen::get();
        return redirect()->route('/', $citizens)->with('success','<span class="fw-bold">'.auth()->user()->name.'</span> a citizen to NPCommision');
        return response()->json([
            'success' => 'Registered Successfully'
        ], 400);
    }

    public function check_name_exist (Request $request) {
        if (Citizen::where('name', $request->name)->first()) {
            return "Error: This citizen has already been registered";
        }
    }

}
