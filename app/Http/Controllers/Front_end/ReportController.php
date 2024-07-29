<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Club;
use App\Models\User;
use App\Models\Scout;
use App\Models\Operation;

class ReportController extends Controller
{
    //transfer report
    public function transfer(){
        $operations = Operation::join('players', 'players.player_id', 'operations.player')
        ->join('clubs', 'players.current_club', 'clubs.club_id')
        ->select('operations.*', 'players.name as player', 'clubs.name as club')
        ->get();

        $data = [
            'ops' => $operations
        ];
        return view('layouts.transfer_report', $data);
    }

    //market report
    public function market(){
        $operations = Operation::join('players', 'players.player_id', 'operations.player')
        ->join('clubs', 'players.current_club', 'clubs.club_id')
        ->where('is_done', '0')
        ->select('operations.*', 'players.name as player', 'clubs.name as club')
        ->get();

        $data = [
            'ops' => $operations
        ];
        return view('layouts.on_market_list', $data);
    }
}
