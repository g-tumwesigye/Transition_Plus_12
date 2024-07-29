<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Club;
use App\Models\User;
use App\Models\Scout;
use App\Models\Operation;

class OperationController extends Controller
{
    public function index(){
        $players = Player::where('is_active', '1')->get();

        $data = [
            'players' => $players
        ];
        return view('layouts.operation_new', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'telephone' => ['required'],
            'description' => ['required'],
            'cost' => ['required', 'numeric'],
            'player' => ['required'],
            'email' => ['required']
        ]);

        $data_to_save = [
            'telephone' => $request->telephone,
            'description' => $request->description,
            'cost' => $request->cost,
            'player' => $request->player,
            'email' => $request->email
        ];

        Operation::create($data_to_save);

        return redirect()->route('operation.list')
            ->with('success', 'Item created successfully.');
    }

    public function show(){
        $operations = Operation::join('players', 'players.player_id', 'operations.player')
        ->join('clubs', 'players.current_club', 'clubs.club_id')
        ->select('operations.*', 'players.name as player', 'clubs.name as club')
        ->get();

        $data = [
            'ops' => $operations
        ];
        return view('layouts.operation_list', $data);
    }

    public function destroy($id)
    {
        Operation::where('op_id', $id)->update(['is_active'=> '0']);

        return redirect()->route('operation.list')
            ->with('success', 'Item deleted successfully.');
    }

    public function undestroy($id)
    {
        Operation::where('op_id', $id)->update(['is_active'=> '1']);

        return redirect()->route('operation.list')
            ->with('success', 'Item deleted successfully.');
    }

    public function edit($id){
        $data = Operation::where('op_id', $id)->first();
        $players = Player::where('is_active', '1')->get();

        $data = [
            'players' => $players,
            'data' => $data
        ];
        return view('layouts.operation_edit', $data);
    }

    public function update(Request $request){

        $validatedData = $request->validate([
            'telephone' => ['required'],
            'description' => ['required'],
            'cost' => ['required', 'numeric'],
            'player' => ['required'],
            'email' => ['required']
        ]);
        $id = $request->id;

        $data_to_save = [
            'telephone' => $request->telephone,
            'description' => $request->description,
            'cost' => $request->cost,
            'player' => $request->player,
            'email' => $request->email
        ];

        Operation::where('op_id', $id)->update($data_to_save);

        return redirect()->route('operation.list')
            ->with('success', 'Item updated successfully.');
    }

    public function pricePropose($id){
        $operations = Operation::join('players', 'players.player_id', 'operations.player')
        ->join('clubs', 'players.current_club', 'clubs.club_id')
        ->where('op_id', $id)
        ->select('operations.*', 'players.name as player', 'clubs.name as club')
        ->first();

        $clubs = Club::all();
        $data = [
            'operation' => $operations,
            'clubs' => $clubs
        ];
        return view('layouts.operation_cost', $data);
    }

    public function price(Request $request){

        $validatedData = $request->validate([
            'cost' => ['required', 'numeric'],
            'club' => ['required']
        ]);

        $old = Operation::where('op_id', $request->id)
        ->first()->player;
        $club = Player::where('player_id', $old)->first()->current_club;

        $data_to_save = [
            'paid_cost' => $request->cost,
            'is_done' => '1',
            'club' => $club
        ];

        $data = [
            'current_club' => $request->club
        ];

        Operation::where('op_id', $request->id)->update($data_to_save);
        Player::where('player_id', $old)->update($data);
        return redirect()->route('operation.list');
    }
}
