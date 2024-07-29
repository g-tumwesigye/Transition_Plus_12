<?php

namespace App\Http\Controllers\Back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ClubController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'names' => ['required'],
            'telephone' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email', 'unique:users,email']
        ]);

        $data_to_save_user = [
            'username' => $request->names,
            'email' => $request->email,
            'password' => Hash::make($request->email),
            'role_id' => 3,
        ];

        $data_to_save_club = [
            'name' => $request->names,
            'logo' => null,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'description' => $request->description
        ];

        User::create($data_to_save_user);
        Club::create($data_to_save_club);

        return redirect()->route('club.list')
            ->with('success', 'Item created successfully.');
    }

    public function edit($id){
        $data = Club::findOrFail($id);
        return view('layouts.club_edit', compact('data'));
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'names' => ['required'],
            'telephone' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email']
        ]);

        $id = $request->id;
        $id_mail = $request->id_mail;

        $data_to_save_user = [
            'username' => $request->names,
            'email' => $request->email,
        ];

        $data_to_save_club = [
            'name' => $request->names,
            'logo' => null,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'description' => $request->description
        ];

        User::where('email', $id_mail)->update($data_to_save_user);
        Club::where('club_id', $id)->update($data_to_save_club);

        return redirect()->route('club.list')
            ->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = Club::findOrFail($id);
        $id_mail = User::where('email', $item->email)->first();

        User::where('email', $id_mail)->update(['is_active'=> '0']);
        Club::where('club_id', $id)->update(['is_active'=>'0']);

        return redirect()->route('club.list')
            ->with('success', 'Item deleted successfully.');
    }

    public function undestroy($id)
    {
        $item = Club::findOrFail($id);
        $id_mail = User::where('email', $item->email)->first();

        User::where('email', $id_mail)->update(['is_active'=> '1']);
        Club::where('club_id', $id)->update(['is_active'=>'1']);

        return redirect()->route('club.list')
            ->with('success', 'Item unlocked successfully.');
    }
}
