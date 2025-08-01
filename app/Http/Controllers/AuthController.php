<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Session::flash('email', $request->username);

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user(); // ambil data user yang login

            // Cek role_id dan redirect sesuai role
            if ($user->role_id == 1) {
                return redirect()->intended('/admin/dashboard'); // tampilan admin
            } elseif ($user->role_id == 2) {
                return redirect()->intended('/'); // tampilan user
            }

            // Kalau role tidak dikenali, arahkan ke halaman umum atau logout
            return redirect('/')->with('error', 'Role tidak dikenali.');
        }

        // Kalau gagal login
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Failed, Email or Password incorrect. Please try again!');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $validasi = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'img' => ['required'],
            'alamat' => ['required'],
            'nomor' => ['required'],
            'password' => ['required'],
        ]);
        $user = new User(); // jangan isi parameter

        $user->name = $validasi['name'];
        $user->email = $validasi['email'];
        $user->alamat = $validasi['alamat'];
        $user->nomor = $validasi['nomor'];
        $user->password = bcrypt($validasi['password']); // jangan simpan plain password!

        $nama_gambar = $request->img->getClientOriginalName();
        $request->img->move(public_path('img/akun'), $nama_gambar);
        $user->img = $nama_gambar;

        $user->role_id = 2;
        // dd($user);
        $user->save();

        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id, Request $request)
    {
        $validate = $request->validate([
            'img' => ['nullable'],
            'name' => ['nullable'],
            'email' => ['nullable'],
            'nomor' => ['nullable'],
            'alamat' => ['nullable'],
            'password' => ['nullable', 'min:8'],
        ]);

        $user = User::find($id);
        if ($request->file('img')) {
            # code...
            $nama_gambar = time() . '.' . $request->img->extension();
            $request->img->move(public_path('img/akun'), $nama_gambar);
            $user->img = $nama_gambar;
        } else {
            # code...
            $nama_gambar = $user->img ? $user->img : null;
        }
        // dd($request->file('img'));
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nomor = $request->nomor;
        $user->alamat = $request->alamat;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
        // $user->save($validate);
        //

        if ($user->save()) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil edit data!');
        }
        return back()->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Display the specified resource.
     */
    public function regist()
    {
        return view('registrasi');
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
