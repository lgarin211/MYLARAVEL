<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function index()
    {
        $data['run'] = 'agustinus pardamean lumban tobing kelas 10 rpl 1 dari kota bogor';
        $trun=array('agus','mana','suga','lucas');
        $data['run2']=$trun;
        // dd($data);
        return view('admin.blank', compact('data'));
    }
}
