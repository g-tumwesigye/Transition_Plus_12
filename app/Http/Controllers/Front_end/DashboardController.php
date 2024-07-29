<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Club;
use App\Models\User;
use App\Models\Scout;
use App\Models\Operation;

class DashboardController extends Controller
{
    //Dashboard page
    public function index(){
        $users = User::all()->count();
        $transfer = Operation::all()->count();
        $clubs = Club::all()->count();
        $scouts = Scout::all()->count();
        $operations = Operation::join('players', 'players.player_id', 'operations.player')
        ->join('clubs', 'players.current_club', 'clubs.club_id')
        ->select('operations.*', 'players.name as player', 'clubs.name as club')
        ->limit(6)
        ->get();

        $data = [
            'users' => $users,
            'transfers' => $transfer,
            'clubs' => $clubs,
            'scouts' => $scouts,
            'operations' => $operations,
        ];
        return view('layouts.index', $data);
    }
}
