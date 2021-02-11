<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.v_index');
    }

    public function about(){
        $data = [
            'nama' => 'Aditya Himawan',
            'keterangan' => 'Develop By Adit'
        ];
        return view ('admin.v_about',$data);
    }

    public function parsing($id){
        return 'hasil parsing'.$id;
    }
}
