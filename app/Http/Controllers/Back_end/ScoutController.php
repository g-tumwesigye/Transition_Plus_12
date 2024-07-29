<?php

namespace App\Http\Controllers\Back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scout;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ScoutController extends Controller
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
            'role_id' => 4,
        ];

        $user = User::insertGetId($data_to_save_user);

        $data_to_save_club = [
            'name' => $request->names,
            'profile' => null,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'description' => $request->description,
            'user_id' => $user,
        ];

        Scout::create($data_to_save_club);

        return redirect()->route('scout.list')
            ->with('success', 'Item created successfully.');
    }

    public function edit($id){
        $data = Scout::findOrFail($id);
        $clubs = Scout::where('is_active', '1')->get();
        return view('layouts.scout_edit', compact(['data', 'clubs']));
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'names' => ['required'],
            'telephone' => ['required'],
            'description' => ['required'],
            'email' => ['required', 'email']
        ]);

        $id = $request->id;
        $id_mail = $request->id_user;


        $data_to_save_user = [
            'username' => $request->names,
            'email' => $request->email,
        ];

        $data_to_save_club = [
            'name' => $request->names,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'description' => $request->description,
        ];

        User::where('user_id', $id_mail)->update($data_to_save_user);
        Scout::where('Scout_id', $id)->update($data_to_save_club);

        return redirect()->route('scout.list')
            ->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = Scout::findOrFail($id);
        $id_mail = User::where('user_id', $item->user_id)->first();

        User::where('user_id', $id_mail->user_id)->update(['is_active'=> '0']);
        Scout::where('Scout_id', $id)->update(['is_active'=>'0']);

        return redirect()->route('scout.list')
            ->with('success', 'Item deleted successfully.');
    }

    public function undestroy($id)
    {
        $item = Scout::findOrFail($id);
        $id_mail = User::where('user_id', $item->user_id)->first();

        User::where('user_id', $id_mail->user_id)->update(['is_active'=> '1']);
        Scout::where('Scout_id', $id)->update(['is_active'=>'1']);

        return redirect()->route('scout.list')
            ->with('success', 'Item deleted successfully.');
    }
}
