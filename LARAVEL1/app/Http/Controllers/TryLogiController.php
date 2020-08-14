<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RunModels;

class TryLogiController extends Controller
{
    public function index(Request $request)
    {
        $a = $request->session()->get('nama');
        $all=$request->session()->get('all');
        $all_data=RunModels::get_all();
        // var_dump($all);

        if (!$all==null) {
            echo '<br>session = '. $a;
            echo '<br>nama = '.$all->nama;
            echo '<br>email = '.$all->email;
            echo '<br>password = '.$all->password."<br><hr>";
            echo '<a href="/login/delet">logout</a>';
        } else {
            echo '<br>session = '. $a;
            return view('try/login', compact('all_data'));
            // return redirect('/login/set');
        }
    }

    public function set(Request $request)
    {
        $nama=$_POST['email'];
        // var_dump($_POST);
        $run=RunModels::get_user($nama);

        if (!$run==null) {
            if ($run->password==$_POST['pwd']) {
                $request->session()->put('nama', $nama);
                $request->session()->put('all', $run);
            } else {
                $request->session()->put('nama', 'password salah harap cek password anda');
            }
        } else {
            $request->session()->put('nama', 'data tidak ada harap cek email anda');
        }

        return redirect('/login');
    }

    public function del(Request $request)
    {
        $request->session()->forget('nama');
        $request->session()->forget('all');
        return redirect('/login');
    }
    public function upload()
    {
        RunModels::add_user($_POST);
        return redirect('/login');
    }
}
