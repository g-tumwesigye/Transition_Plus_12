<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    //create new club form
    public function create(){
        return view('layouts.club_new');
    }

    //product list
    public function show(){
        $clubs = Club::all();
        return view('layouts.club_list', compact('clubs'));
    }
}
