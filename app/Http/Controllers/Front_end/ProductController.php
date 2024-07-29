<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Player;
use App\Models\User;

class ProductController extends Controller
{
    //create new product form
    public function create(){
        $clubs = Club::where('is_active', '1')->get();
        return view('layouts.product_new', compact('clubs'));
    }

    //product list
    public function show(){
        $players = Player::join('clubs', 'clubs.club_id', 'players.current_club')
        ->select('players.*', 'clubs.name as club')
        ->get();
        return view('layouts.product_list', compact('players'));
    }

    //product action list
    public function required_action(){
        return view('layouts.product_required_action');
    }
}
