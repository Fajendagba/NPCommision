<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Comment;
use App\Models\LGA;
use App\Models\Post;
use App\Models\State;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct () {
        $this->middleware(['auth']);
    }

    public function home () {
        //  Paginator::useBootstrap();
        //  auth()->user()?->name;
        
        if (isset(auth()->user()->username)) {
            $corp_details = User::where('name', auth()->user() -> name)->first();
        } else {
            $corp_details = "";
        }
        $states     = State::orderBy('created_at', 'desc')->get();
        $wards      = Ward::orderBy('created_at', 'desc')->get();
        $lgas       = LGA::orderBy('created_at', 'desc')->get();
        $citizens    = Citizen::orderBy('created_at', 'desc')->get();

        return view('home', [
            'corp_details'  => $corp_details,
            'citizens'       => $citizens,
            'states'        => $states,
            'wards'         => $wards,
            'lgas'          => $lgas,
        ]);
    }
}
