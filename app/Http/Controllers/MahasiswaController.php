<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;



class MahasiswaController extends Controller
{

    public function index(User $user){
        $user = User::all();
        return view('admin.dashboard', compact('user'));
    }


    public function akun_mhs(User $user)
    {
        $users = User::all();
        return view('admin.akun-mahasiswa', compact('users'));
    }


    public function delete(User $user)
    {
        $user->delete();
        return redirect::route('index-user');
    }


    public function detail(User $user)
    {
        return view('admin.akun-mahasiswa-detail', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.akun-mahasiswa-detail-edit', compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $foto = $request->file('foto');

        $user = User::find($user->id);

        $user->nama = $request->nama;
        $user->no_hp = $request->no_hp;
        $user->password = bcrypt($request->password);

        if($foto)
        {

            File::delete(public_path('f/avatar' . $user->foto));
            $filename = 'user-'. time() . '.' . $foto->extension();
            $user->foto = $filename;
            $foto->move(public_path('f/avatar'), $filename);
        }

        $user->update();

        return redirect()->back()->with('success', 'Data Mahasiswa Berhasil Di Ubah');
    }

}
