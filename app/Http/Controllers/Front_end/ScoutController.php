<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scout;

class ScoutController extends Controller
{
    //create new scout form
    public function create(){
        return view('layouts.scout_new');
    }

    //scout list
    public function show(){
        $scouts = Scout::all();
        return view('layouts.scout_list',compact('scouts'));
    }

    //scout action list
    public function required_action(){
        return view('layouts.scout_required_action');
    }
}
