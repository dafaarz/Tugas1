<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class DataController extends Controller
{

    static $data = [
        [
            "nama" => "Daffa Arrazi",
            "gender" => "pria",
            "email" => "daffa.arrazi@binus.ac.id"

        ], [
            "nama" => "Obama chan",
            "gender" => "wanita",
            "email" => "USAno1@binus.ac.id"
        ],[
            "nama" => "Kernel Sanders",
            "gender" => "ayam",
            "email" => "ayamamerika@binus.ac.id"
        ]

        ];




    public function all(){
        return collect(self::$data);
    }

    

    public function index(){

        return view('about',["title" => "about", "datas" =>  DataController::all()]);
}


}
