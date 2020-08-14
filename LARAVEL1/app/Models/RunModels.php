<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;

class RunModels
{
    public static function get_user($data)
    {
        return $run=DB::table('try')->where('email', $data)->first();
    }

    public static function add_user($data)
    {
        var_dump($data);
        DB::table('try')->insert(
            ['email' => $data['email'],
            'password' => $data['pwd'],
            'nama' => $data['nama'],
            ]
        );
    }
    public static function get_all()
    {
        return  $users = DB::table('try')->get();
    }
}
